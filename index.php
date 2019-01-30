<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo basename(__DIR__); ?></title>
  <style type="text/css">
  * {margin:0;padding:0;}
  ul {list-style-type: none;padding-left: 10px;}
  h1 {font-size:20px; margin-bottom: 20px;}
  h3 {margin-top: 10px;}
  #content {width: 480px;max-width:100%;margin: 0 auto;padding: 30px 20px; background: white; margin-top: 10px;}
  body{width:100%;background:#f6f6f6;font:12px/20px Arial, sans-serif;color:#404040;}
  a{color:#007CC3;text-decoration:none;}
  a:hover{text-decoration:underline;}
  </style>
</head>
<body>
  <div id="content">
    <h1><?php echo basename(__DIR__); ?> HTML Prototype</h1>
    <h3>Auth</h3>
    <ul>
      <li><a href="_login.php">Login</a></li>
      <li><a href="_register.php">Register</a></li>
    </ul>
    <h3>Domains</h3>
    <ul>
      <li><a href="_domains-list.php">List</a></li>
      <li><a href="_domains-grid-1.php">Grid 1</a></li>
      <li><a href="_domains-grid-2.php">Grid 2</a></li>
      <li><a href="_domains-grid-mine.php">Mine</a></li>
      <li><a href="_domain-detail.php">Detail</a></li>
      <li><a href="_domain-offer.php">Offer</a></li>
      <li><a href="_domain-offer-overview.php">Offer overview</a></li>
      <li><a href="_domain-offer-success.php">Success</a></li>
      <li><a href="_domain-offer-edit.php">Edit</a></li>
      <li><a href="_domain-cancelled.php">Cancelled</a></li>
      <li><a href="_domain-offer-ended.php">Ended</a></li>
      <li><a href="_domain-offer-paid.php">Paid</a></li>
    </ul>
    <h3>Invoices</h3>
    <ul>
      <li><a href="_invoices-list.php">List</a></li>
      <li><a href="_invoice-detail.php">Detail</a></li>
      <li><a href="_invoice-empty.php">Empty</a></li>
      <li><a href="_invoice-pay-bank.php">Pay bank</a></li>
      <li><a href="_invoice-pay-cc.php">Pay CC</a></li>
      <li><a href="_invoice-paid.php">Paid</a></li>
    </ul>
    <h3>Test</h3>
    <ul>
      <li><a href="_test-start.php">Start</a></li>
      <li><a href="_test.php">Ongoing</a></li>
      <li><a href="_test-end.php">Success</a></li>
      <li><a href="_test-wrong.php">Wrong answer</a></li>
      <li><a href="_test-correct.php">Right answer</a></li>
      <li><a href="_test-cancelled.php">Cencelled</a></li>
    </ul>
    <h3>Registrar</h3>
    <ul>      
      <li><a href="_registrar-help.php">Help</a></li>
      <li><a href="_registrar-wrong-ip.php">Wrong IP</a></li>
      <li><a href="_registrar-certification.php">Certification</a></li>
      <li><a href="_registrar-why-certify.php">Why certify</a></li>
      <li><a href="_registrar-questions.php">Questions</a></li>
    </ul>
  </div><!-- #content -->
</body>
</html>