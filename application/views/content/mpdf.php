<!DOCTYPE html>
<html>
<!-- <html lang="ar"> for arabic only -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Express Wash Customer Invoice</title>
    <style>
        @media print {
            @page {
                margin: 0 auto;
                sheet-size: 300px 250mm;
            }
            html {
                direction: rtl;
            }
            html,body{margin:0;padding:0}
            #printContainer {
                width: 250px;
                margin: auto;
                /*padding: 10px;*/
                /*border: 2px dotted #000;*/
                text-align: justify;
            }

            /*span {
                display: inline-block;
                min-width: 350px;
                white-space: nowrap;
                background: red;
            }*/

            .text-center{text-align: center;}
        }
    </style>
</head>
<body onload="window.print();">
<h1 id="logo" class="text-center"><img src='<?= base_url() ?>global/site/logo.jpg' alt='Logo'></h1>

<div id='printContainer'>
    <h2 id="slogan" style="margin-top:0" class="text-center">Cleaning Company</h2>

    <table>
        <tr>
            <td>Invoice Num</td>
            <td><b>#59867</b></td>
        </tr>
        <tr>
            <td>Created At</td>
            <td><b><?= date("d-m-Y H:i:s", time()); ?><br></b></td>
        </tr>

        <tr>
            <td>Client Name</td>
            <td><b>John Cena</b></td>
        </tr>
    </table>
    <p class="text-center"><img src="<?= base_url() ?>global/site/qr.png" alt="QR-code" class="left"/></p>
    <hr>

    <table>
        <tr>
            <td><b>Service Type</b></td>
            <td><b>Price</b></td>
        </tr>
        <tr><td colspan="2"><hr></td></tr>
        <tr>
            <td><b>Clean Cars</b></td>
            <td><b>15.7 USD</b></td>
        </tr>
        <tr>
            <td> eco badge for waterless car washThe service at Detailing Knights is not only unmatched, it is also mobile, waterless and environmentally friendly. </td>
            <td></td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
            <td><b>Service Fee</b></td>
            <td><b>15.7 USD</b></td>
        </tr>
        <tr>
            <td><b>Discount</b></td>
            <td><b>1.7 USD</b></td>
        </tr>
        <tr>
            <td><b>Net Value</b></td>
            <td><b>14 USD</b></td>
        </tr>
    </table>
    <hr>

</div>
</body>
</html>
