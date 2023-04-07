<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\AppelWalletRequest;
use Namshi\JOSE\SimpleJWS;
use PKPass\PKPass;
use Carbon\Carbon;

class AppleWalletController extends Controller
{
    public function generatePass(AppelWalletRequest $request)
    {
        $tokenResponse = Http::withHeaders([
            'Accept' => 'application/json, text/plain, */*',
            'Content-Type' => 'application/json'
            ])->post('https://ec.macirvie.com/bridge-macirvie-ec-backend/login', [
              'username' => 'mympass',
              'password' => 'tP54whd9JhfLB8Lh'
            ]);
            
        if ($tokenResponse->failed()) {
            throw new HttpResponseException(response()->json([
                'success'   => false,
                'message'   => "Failed to authenticate, please contact your administrator"
            ]));
        }
        
            
        $response = Http::withHeaders([
            'Accept' => 'application/json, text/plain, */*',
            'Authorization' => $tokenResponse->header('Authorization'),
            'Content-Type' => 'application/json'
            ])
            ->get('https://ec.macirvie.com/bridge-macirvie-ec-backend/police/mypass?plmRefCode='.$request->numPolice);

        if ($response->failed()) {
            throw new HttpResponseException(response()->json([
                'success'   => false,
                'message'   => "Failed to get police informations, either you provided a wrong 'token' or a 'police number'"
            ]));
        }
        
        $details = [
            "qrCode" => $response->json()["qrCode"],
            "DateFrom" => $response->json()["effetDate"],
            "DateTo" => $response->json()["expirationDate"],
            "dateDeNaissance" => $response->json()["ddn"],
            "adresse" => $response->json()["adresse"],
            "codeAgence" => $response->json()["codeAgence"],

            "fullName" => $response->json()["nom"] .' '. $response->json()["prenom"],
            "NumPolice" => $response->json()["refCode"],
        ];

        $pass = new PKPass(env('CERTIFICATE_PATH'), env('CERTIFICATE_PASS'));

        $data = [
            'description' => 'MyM Voyage | Macir Vie',
            'formatVersion' => 1,
            'organizationName' => 'Macirvie',
            'passTypeIdentifier' => 'pass.com.macirvie.mym',
            'serialNumber' => $response->json()["refCode"],
            'teamIdentifier' => 'LSRKWA7NDN',
            "foregroundColor"=>"rgb(255, 255, 255)",
            "backgroundColor"=>"#003781",
            "labelColor"=>"rgb(255, 255, 255)",
            "barcode"=>[
                "format"=>"PKBarcodeFormatQR",
                "message"=>$details['qrCode'],
                "messageEncoding"=>"iso-8859-1"
            ],
            'eventTicket' => [
                "headerFields"=>[
                    [
                        "key"=>"header",
                        "label"=>"",
                        "value"=>"Travel Inssurance"
                    ]
                ],
                'primaryFields' => [
                    [
                        'key' => 'fullName',
                        'value' => $details['fullName'],
                    ],
                ],
                'secondaryFields' => [
                    [
                        'key' => 'NumPolice',
                        'label' => 'N° de police d\'assurance voyage',
                        'value' => $details['NumPolice'],
                    ],
                ],
                'auxiliaryFields' => [
                    [
                        "key"=>"DateFrom",
                        "label"=>"Valable du",
                        "value"=> date("d/m/Y", strtotime($details['DateFrom']))
                    ],
                    [
                        "key"=>"DateTo",
                        "label"=>"Au",
                        "value"=> date("d/m/Y", strtotime($details['DateTo']))
                    ],
                ],
                'backFields' => [
                    [
                        'key' => 'fullName',
                        'label' => 'Nom et pénom',
                        'value' => $details['fullName'],
                    ],
                    [
                        'key' => 'dateDeNaissance',
                        'label' => 'Date de naissance',
                        'value' => date("d/m/Y", strtotime($details['dateDeNaissance'])),
                    ],
                    [
                        'key' => 'adresse',
                        'label' => 'Adresse',
                        'value' => $details['adresse'],
                    ],
                    [
                        'key' => 'valableDu',
                        'label' => 'Valable du',
                        'value' => date("d/m/Y", strtotime($details['DateFrom'])),
                    ],
                    [
                        'key' => 'valableAu',
                        'label' => 'Valable Au',
                        'value' => date("d/m/Y", strtotime($details['DateTo'])),
                    ],
                    [
                        'key' => 'numPolice',
                        'label' => 'N° de police d\'assurance voyage',
                        'value' => $details['NumPolice'],
                    ],
                    [
                        'key' => 'codeAgence',
                        'label' => 'Code agence',
                        'value' => $details['codeAgence'],
                    ],
                    [
                        'key' => 'Mapfre',
                        'label' => 'MAPFRE | ASISTENCIA',
                        'value' => 'Service assitance 24h/24 - 7j/7',
                    ],
                    [
                        'key' => 'tel',
                        'label' => 'Tel',
                        'value' => '+33 437 37 28 58 | +213 21 98 60 50',
                    ],
                    [
                        'key' => 'fax',
                        'label' => 'Fax',
                        'value' => '+33 437 37 28 57 | +213 21 29 86 35',
                    ],
                    [
                        'key' => 'email',
                        'label' => 'Email',
                        'value' => 'algcosiam@mapfre.com',
                    ],
                ],
            ],
        ];

        $pass->setData($data);

        // Add files to the pass package
        $pass->addFile('passImages/icon.png');
        $pass->addFile('passImages/logo.png');
        $pass->addFile('passImages/logo@2x.png');
        $pass->addFile('passImages/logo@3x.png');
        $pass->addFile('passImages/background.png');
        $pass->addFile('passImages/background@2x.png');
        $pass->addFile('passImages/background@3x.png');
        $pass->addFile('passImages/thumbnail.png');
        $pass->addFile('passImages/thumbnail@2x.png');
        $pass->addFile('passImages/thumbnail@3x.png');
        $filename = "MyM_Voyage-wallet.pkpass";
        return new Response($pass->create(), 200, [
            'Content-Transfer-Encoding' => 'binary',
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => 'attachment; filename='.$filename,
            'Content-Type' => 'application/vnd.apple.pkpass',
        ]);
    }
    
    public function generatePassGet(Request $request)
    {
        // // dd($request);
        // $tokenResponse = Http::withHeaders([
        //     'Accept' => 'application/json, text/plain, */*',
        //     'Content-Type' => 'application/json'
        //     ])->post('https://ec.macirvie.com/bridge-macirvie-ec-backend/login', [
        //       'username' => 'mympass',
        //       'password' => 'tP54whd9JhfLB8Lh'
        //     ]);
            
        // if ($tokenResponse->failed()) {
        //     throw new HttpResponseException(response()->json([
        //         'success'   => false,
        //         'message'   => "Failed to authenticate, please contact your administrator"
        //     ]));
        // }
        
        $response = Http::withHeaders([
            'Accept' => 'application/json, text/plain, */*',
            'Authorization' => $request->query('token'),
            'Content-Type' => 'application/json'
            ])
            ->get('https://ec.macirvie.com/bridge-macirvie-ec-backend/police/mypass?plmRefCode='.$request->query('numPolice'));

        if ($response->failed()) {
            throw new HttpResponseException(response()->json([
                'success'   => false,
                'message'   => "Failed to get police informations, either you provided a wrong 'token' or a 'police number'"
            ]));
        }
        
        $details = [
            "qrCode" => $response->json()["qrCode"],
            "DateFrom" => $response->json()["effetDate"],
            "DateTo" => $response->json()["expirationDate"],
            "dateDeNaissance" => $response->json()["ddn"],
            "adresse" => isset($response->json()["adresse"]) ? $response->json()["adresse"] : '',
            "codeAgence" => $response->json()["codeAgence"],

            "fullName" => $response->json()["nom"] .' '. $response->json()["prenom"],
            "NumPolice" => $response->json()["refCode"],
        ];
        

        $pass = new PKPass(env('CERTIFICATE_PATH'), env('CERTIFICATE_PASS'));

        $data = [
            'description' => 'MyM Voyage | Macir Vie',
            'formatVersion' => 1,
            'organizationName' => 'Macirvie',
            'passTypeIdentifier' => 'pass.com.macirvie.mym',
            'serialNumber' => $response->json()["refCode"],
            'teamIdentifier' => 'LSRKWA7NDN',
            "foregroundColor"=>"rgb(255, 255, 255)",
            "backgroundColor"=>"#003781",
            "labelColor"=>"rgb(255, 255, 255)",
            "barcode"=>[
                "format"=>"PKBarcodeFormatQR",
                "message"=>$details['qrCode'],
                "messageEncoding"=>"iso-8859-1"
            ],
            'eventTicket' => [
                "headerFields"=>[
                    [
                        "key"=>"header",
                        "label"=>"",
                        "value"=>"Travel Inssurance"
                    ]
                ],
                'primaryFields' => [
                    [
                        'key' => 'fullName',
                        'value' => $details['fullName'],
                    ],
                ],
                'secondaryFields' => [
                    [
                        'key' => 'NumPolice',
                        'label' => 'N° de police d\'assurance voyage',
                        'value' => $details['NumPolice'],
                    ],
                ],
                'auxiliaryFields' => [
                    [
                        "key"=>"DateFrom",
                        "label"=>"Valable du",
                        "value"=> date("d/m/Y", strtotime($details['DateFrom']))
                    ],
                    [
                        "key"=>"DateTo",
                        "label"=>"Au",
                        "value"=> date("d/m/Y", strtotime($details['DateTo']))
                    ],
                ],
                'backFields' => [
                    [
                        'key' => 'fullName',
                        'label' => 'Nom et pénom',
                        'value' => $details['fullName'],
                    ],
                    [
                        'key' => 'dateDeNaissance',
                        'label' => 'Date de naissance',
                        'value' => date("d/m/Y", strtotime($details['dateDeNaissance'])),
                    ],
                    [
                        'key' => 'adresse',
                        'label' => 'Adresse',
                        'value' => $details['adresse'],
                    ],
                    [
                        'key' => 'valableDu',
                        'label' => 'Valable du',
                        'value' => date("d/m/Y", strtotime($details['DateFrom'])),
                    ],
                    [
                        'key' => 'valableAu',
                        'label' => 'Valable Au',
                        'value' => date("d/m/Y", strtotime($details['DateTo'])),
                    ],
                    [
                        'key' => 'numPolice',
                        'label' => 'N° de police d\'assurance voyage',
                        'value' => $details['NumPolice'],
                    ],
                    [
                        'key' => 'codeAgence',
                        'label' => 'Code agence',
                        'value' => $details['codeAgence'],
                    ],
                    [
                        'key' => 'Mapfre',
                        'label' => 'MAPFRE | ASISTENCIA',
                        'value' => 'Service assitance 24h/24 - 7j/7',
                    ],
                    [
                        'key' => 'tel',
                        'label' => 'Tel',
                        'value' => '+33 437 37 28 58 | +213 21 98 60 50',
                    ],
                    [
                        'key' => 'fax',
                        'label' => 'Fax',
                        'value' => '+33 437 37 28 57 | +213 21 29 86 35',
                    ],
                    [
                        'key' => 'email',
                        'label' => 'Email',
                        'value' => 'algcosiam@mapfre.com',
                    ],
                ],
            ],
        ];

        $pass->setData($data);

        // Add files to the pass package
        $pass->addFile('passImages/icon.png');
        $pass->addFile('passImages/logo.png');
        $pass->addFile('passImages/logo@2x.png');
        $pass->addFile('passImages/logo@3x.png');
        $pass->addFile('passImages/background.png');
        $pass->addFile('passImages/background@2x.png');
        $pass->addFile('passImages/background@3x.png');
        $pass->addFile('passImages/thumbnail.png');
        $pass->addFile('passImages/thumbnail@2x.png');
        $pass->addFile('passImages/thumbnail@3x.png');
        $filename = "MyM_Voyage-wallet.pkpass";
        return new Response($pass->create(), 200, [
            'Content-Transfer-Encoding' => 'binary',
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => 'attachment; filename='.$filename,
            'Content-Type' => 'application/vnd.apple.pkpass',
        ]);
    }
}
