<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NewsLetter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .body{
            background-color: #ededed;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 1em;
        }
        .entete, .footer{
            text-align: center;
        }
        .footer{
            font-size: 10px;
        }
        .entete a{
            color: gray;
        }
        .container{
            width: 800px;
            margin: 0 auto;
        }
        .container .logo-block{
            width: 100%;
            height: 130px;
            background: rgba(255, 255, 255, 1);
            border-top: 5px solid #DADADA;
        }
        .container .logo-block table tr td{
            width: 450px;
        }
        .container .logo-block .logo{
            padding: 10px 10px 10px 8em;
        }
        .container .logo-block .text{
            padding: 10px 8em 10px 10px;
            text-align: center;
        }
        .container .logo-block .text p{
            text-transform: uppercase;
            font-size: 18px;
        }
        .container .body{
            background-color: #f6f6f6;
            padding: 2em;
        }
        .container .body .title, .container .body .content{
            font-size: 16px;
        }
        .container .body .formation-table{
            width: 100%;
            text-transform: uppercase;
            background-color: #fff;
        }
        .container .body .formation-table .theme{
            text-align: left;
            padding: 5px;
        }
        .container .body .formation-table .title{
            background-color: #00215F;
            color: #fff;
        }
        .container .body .formation-table .title td{
            text-align: left;
        }
        .container .body .formation-table .content td{
            font-size: 12px;
            padding: 2px 5px;
            text-align: center;
            border-bottom: 1px solid #9E9E9E;
        }
        .container .body .formation-table .content .libelle{
            text-align: left;
        }
        .container .body .formation-table .content .bg-mai, .container .body .formation-table .content .bg-juillet{
            background-color: #D9E2F3;
        }
        .container .body .formation-table .content .ouaga{
            color: red;
            font-weight: bold;
        }
        .container .body .formation-table .content .abj{
            color: green;
            font-weight: bold
        }
        .container .body .sign-in{
            margin: 4em;
            padding: 10px;
            text-align: center;
        }
        .container .body .sign-in a{
            border: 0;
            padding: 20px;
            background-color: #5B9AD4;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
        }
        .container .body .complement p{
            font-style: italic;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div class="body">
<br><br>
<div class="entete">
    <p>Si vous ne voyez pas ce message correctement, <a href="http://seminaire.komptech-cimat.net/">consultez-le en ligne.</a></p>
</div>
<div class="container">
    <div class="logo-block">
        <table>
            <tr>
                <td>
                    <div class="logo">
                        <a href="http://komptech-cimat.net/">
                            <img src="http://new.komptech-cimat.net/storage/settings/March2018/ZkfSNr4fG00KS7D25ta9.png" alt="logo komptech">
                        </a>
                    </div>
                </td>
                <td>
                    <div class="text">
                        <p>invitation aux seminaires<br>internationaux de formation</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="body">
        <p class="title">
            Cher {{ $name }},
        </p>
        <p class="content">
            KOMPTECH CIMAT à le plaisir de vous convier aux <strong>séminaires internationaux de formation</strong> qui auront lieu de Mai à Août 2018 à Abidjan et à Ouagadougou selon le calendrier ci-dessous :
        </p>

        <table class="formation-table" cellpadding="0" cellspacing="0">
            <tr class="title">
                <th class="theme">themes de seminaires</th>
                <th class="mai">mai</th>
                <th class="juin">juin</th>
                <th class="juil">juil.</th>
                <th class="aout">août</th>
            </tr>
            <tr class="content">
                <td class="libelle">
                    SMQ : Mise en œuvre de la norme ISO 9001 v2015
                </td>
                <td class="bg-mai">
                    <span class="abj">15-18<br>Abj</span>
                </td>
                <td class="bg-juin"></td>
                <td class="bg-juillet">
                    <span class="ouaga">03-06<br>Ouaga</span>
                </td>
                <td class="bg-aout"></td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Mise en place d'une politique de pilotage de la masse salariale et des charges sociales
                </td>
                <td class="bg-mai"></td>
                <td class="bg-juin"></td>
                <td class="bg-juillet">
                    <span class="abj">03-06<br>Abj</span>
                </td>
                <td class="bg-aout">
                    <span class="ouaga">07-10<br>Ouaga</span>
                </td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Pratique de l'audit de la Sécurité des systèmes informatiques
                </td>
                <td class="bg-mai">
                    <span class="ouaga">15-18<br>Ouaga</span>
                </td>
                <td class="bg-juin"></td>
                <td class="bg-juillet">
                    <span class="abj">10-13<br>Abj</span>
                </td>
                <td class="bg-aout"></td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Elaboration des tableaux de bord de gestion et des reporting
                </td>
                <td class="bg-mai">
                    <span class="abj">15-18<br>Abj</span>
                </td>
                <td class="bg-juin"></td>
                <td class="bg-juillet"></td>
                <td class="bg-aout">
                    <span class="ouaga">07-10<br>Ouaga</span>
                </td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Méthode d'archivage et gestion électronique des documents dans les organisations
                </td>
                <td class="bg-mai">
                    <span class="ouaga">23-25<br>Ouaga</span>
                </td>
                <td class="bg-juin">
                    <span class="abj">05-08<br>Abj</span>
                </td>
                <td class="bg-juillet"></td>
                <td class="bg-aout"></td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    COBIT 5 Foundation : Gouvernance et gestion des services informatiques
                </td>
                <td class="bg-mai"></td>
                <td class="bg-juin">
                    <span class="abj">19-22<br>Abj</span>
                </td>
                <td class="bg-juillet">
                    <span class="ouaga">17-20<br>Ouaga</span>
                </td>
                <td class="bg-aout"></td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Mesures préventives et nouvelles techniques de recouvrement des créances
                </td>
                <td class="bg-mai"></td>
                <td class="bg-juin">
                    <span class="ouaga">19-22<br>Ouaga</span>
                </td>
                <td class="bg-juillet">
                    <span class="abj">10-13<br>Abj</span>
                </td>
                <td class="bg-aout"></td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Perfectionnement des cadres aux techniques d'élaboration et de gestion budgets
                </td>
                <td class="bg-mai">
                    <span class="abj">23-25<br>Abj</span>
                </td>
                <td class="bg-juin"></td>
                <td class="bg-juillet"></td>
                <td class="bg-aout">
                    <span class="ouaga">22-24<br>Ouaga</span>
                </td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Contrôle de gestion et mise en place d'un système de réduction des coûts
                </td>
                <td class="bg-mai"></td>
                <td class="bg-juin">
                    <span class="abj">26-28<br>Abj</span>
                </td>
                <td class="bg-juillet"></td>
                <td class="bg-aout">
                    <span class="ouaga">28-31<br>Ouaga</span>
                </td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Elaboration et conduite des inventaires
                </td>
                <td class="bg-mai"></td>
                <td class="bg-juin">
                    <span class="ouaga">19-22<br>Ouaga</span>
                </td>
                <td class="bg-juillet">
                    <span class="abj">24-27<br>Abj</span>
                </td>
                <td class="bg-aout"></td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Organisation et conduite des inventaires
                </td>
                <td class="bg-mai"></td>
                <td class="bg-juin"></td>
                <td class="bg-juillet">
                    <span class="ouaga">24-27<br>Ouaga</span>
                </td>
                <td class="bg-aout">
                    <span class="abj">07-10<br>Abj</span>
                </td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Techniques de communication et gestion relations publiques
                </td>
                <td class="bg-mai">
                    <span class="abj">29-31<br>Abj</span>
                </td>
                <td class="bg-juin">
                    <span class="ouaga">26-28<br>Ouaga</span>
                </td>
                <td class="bg-juillet"></td>
                <td class="bg-aout"></td>
            </tr>

            <tr class="content">
                <td class="libelle">
                    Maitrise et consolidation aux normes IFRS / SYSCOHADA
                </td>
                <td class="bg-mai">
                    <span class="ouaga">29-31<br>Ouaga</span>
                </td>
                <td class="bg-juin"></td>
                <td class="bg-juillet"></td>
                <td class="bg-aout">
                    <span class="abj">28-31<br>Abj</span>
                </td>
            </tr>
        </table>
        <div class="sign-in">
            <a href="http://seminaire.komptech-cimat.net/#portfolio">Inscription en Ligne</a>
        </div>
        <div class="complement">
            <p>
                Ces séminaires constituent des moments d’échanges et de renforcement des capacités sur les enjeux
                et stratégies de développement de la compétitivité des entreprises et des organisations en Afrique. Ils
                regrouperont plusieurs participants venant de divers horizons
            </p>
            <p>
                CONTACTS:
            </p>
            <p>
                Pour toute information sur les conditions de participation et le programme détaillé des formations,
                contactez-nous :
            </p>
            <p>
                Téléphones : Abidjan (+225) 21 28 49 54  Ouagadougou (+226) 58 42 39 09 <br>
                Gsm : (+225) 07 10 90 21 <br>
                Email : infos@komptech-ci.net  <br>
                Web : <a href="http://komptech-cimat.net/">www.komptech-ci.net</a>
            </p>
        </div>
    </div>
</div>
<div class="footer">
    <p>
        Si vous ne souhaitez plus recevoir nos messages, <br>suivez ce lien :
        <a href="{{ route('delete.mail', $id) }}">Veuillez me retirer de votre liste de diffusion</a>
    </p>
</div>
</div>
</body>
</html>