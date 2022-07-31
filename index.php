<?php

require_once __DIR__ . '/vendor/autoload.php';

define('_MPDF_TTFONTPATH', __DIR__ . '/fonts');

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetTitle('SOLAR\'S CE - Empreendimentos | Proposta Gerador Fotovoltaico');
$mpdf->WriteHTML(file_get_contents(__DIR__ . '/css/styles.css'), \Mpdf\HTMLParserMode::HEADER_CSS);

################################################################################
// PAGINA 1
################################################################################
$mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'um');
$mpdf->WriteHTML('
<div style="width:435px;height:100%;color:#424242;">
    <div style="padding-top:938px;padding-left:35px;font-size:13px;">
        <div style="width:390px;float:left;background:#FFF;">Rodrigo Golfeto</div>
    </div>
    <div style="padding-top:10px;padding-left:118px;font-size:13px;">
        <div style="width:155px;float:left;">Rodrigo Golfeto</div>
        <div style="width:118px;float:right;">(67) 99165-8856</div>
    </div>
</div>
');
################################################################################

################################################################################
// PAGINA 2
################################################################################
$mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dois');
################################################################################

################################################################################
// PAGINA 3
################################################################################
$mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'tres');
$mpdf->WriteHTML('
<div style="width:670px;height:100%;color:#424242;">

    <div style="padding-top:95px;padding-left:93px;font-size:30px;color:#424243;line-height:120%;">
        <div style="width:570px;float:left;background:#FFF;">[Aqui vai o nome do cliente]</div>
    </div>

    <div style="padding-top:88px;padding-left:8px;font-size:18.5px;color:#424243;line-height:120%;">
        <div style="width:700px;float:left;background:#FFF;">PROJETO DE MICRO-USINA DE GERAÇÃO FOTOVOLTAICA<br>COM CAPACIDADE MENSAL DE GERAÇÃO DE 00,00 Kwh POR MÊS</div>
    </div>
    
    <div style="padding-top:28px;padding-left:90px;padding-right:5px;font-size:13px;">
        <div style="width:240px;float:left;background:#FFF;">[nome do cliente]</div>
        <div style="width:225px;float:right;background:#FFF;padding-right:8px;">[telefone]</div>
    </div>
    <div style="padding-top:11px;padding-left:90px;padding-right:5px;font-size:13px;">
        <div style="width:240px;float:left;background:#FFF;">[cidade]</div>
        <div style="width:216px;float:right;background:#FFF;padding-right:9px;">[vendedor]</div>
    </div>

    <div style="padding-top:55px;padding-left:250px;font-size:13px;padding-right:7px;">
        <div style="width:75px;float:left;background:#FFF;">Info1</div>
        <div style="width:75px;float:right;background:#FFF;">Info1</div>
    </div>
    <div style="padding-top:22px;padding-left:250px;font-size:13px;padding-right:7px;">
        <div style="width:75px;float:left;background:#FFF;">Info1</div>
        <div style="width:75px;float:right;background:#FFF;">Info1</div>
    </div>
    <div style="padding-top:23px;padding-left:250px;font-size:13px;padding-right:7px;">
        <div style="width:75px;float:left;background:#FFF;">Info1</div>
        <div style="width:75px;float:right;background:#FFF;">Info1</div>
    </div>

    <div style="padding-top:168px;padding-left:25px;padding-right:15px;font-size:28px;text-align:center;">
        <div style="width:280px;float:left;background:#FFFFFF;">2 anos e 6 meses</div>
        <div style="width:280px;float:right;background:#95D500;color:#FFF;">R$ 6.586.880,10</div>
    </div>

</div>
');
################################################################################

################################################################################
// PAGINA 4
################################################################################
$mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'quatro');
################################################################################

################################################################################
// PAGINA 5
################################################################################
$mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cinco');
$mpdf->WriteHTML('

');
################################################################################

################################################################################
// PAGINA 6
################################################################################
$mpdf->AddPage('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'seis');
$mpdf->WriteHTML('
<div style="width:670px;height:100%;color:#424242;">

    <div style="padding-top:125px;padding-left:25px;color:#424243;line-height:180%;">

        <div style="width:340x;float:right;text-align:right;">
            <div style="font-size:24px;">01 GERADOR GROWATT</div>
            <div style="font-size:21px;font-weight:normal;">MID15KTL3-X 220/380V</div>
        </div>

        <div style="width:340x;float:right;text-align:left;padding-top:48px;color:#FFF;">
            <div style="font-size:58px;float:left;padding-left:30px;margin-left:5px;background:#95D700;padding-bottom:20px;">
                4,07<span style="font-size:22px;">kWp</span>
            </div>            
        </div>

        <div style="width:340x;float:right;text-align:left;background:#FFF;">
            <div style="font-size:21px;padding-top:15px;font-weight:normal;padding-left:40px;">40 Módulos JINKO<br>JKM460M-60HL4 460W</div>
        </div>

        <div style="width:340x;float:right;text-align:right;background:#FFF;">
            <div style="font-size:14px;padding-top:15px;font-weight:bold;padding-left:40px;">
                <div>ADICIONAIS:</div>
                <div style="font-size:13px;line-height:150%;font-weight:normal;height:180px;">
                    Condutores elétricos HEPR 90°C<br>
                    Condutores elétricos PVC 70°C<br>
                    Disjuntor CA termomagnético<br>
                    StringBox<br>
                    Haste de aterramento<br>
                    Suporte para os módulos<br>
                    Eletrodutos diversos
                </div>
            </div>
        </div>

        <div style="width:300x;float:left;text-align:center;background:#FFF;margin-top:275px;">
            <div style="font-size:38px;font-weight:bold;vertical-align: middle;text-align: center;margin-top:5px;">
                <span style="font-size:24px;color:#95D500;">R$</span> 25.000,00
            </div>
        </div>

        <div style="width:400x;float:left;text-align:center;margin-top:30px;">
            <div style="width:310x;font-size:18px;font-weight:normal;text-align:right;margin-top:8px;">
            Carência de até 90 dias.
            </div>
        </div>

    </div>
    
</div>
');
################################################################################

$mpdf->Output();
