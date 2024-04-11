<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';
  $created_at = date('Y-m-d H:i:s');

  $contacts->insert_contact($name, $email, $subject, $message, $created_at);

  // Xây dựng nội dung email đẹp và chi tiết
  $thank_you_title = 'Cảm ơn vì đã liên hệ cho chúng tôi';
  $thank_you_content = '
    <html>
    <head>
      <title>Cảm ơn vì đã liên hệ</title>
    </head>
    <body>
      <p>Xin chào ' . $name . ',</p>
      <p>Cảm ơn bạn đã liên hệ cho chúng tôi. Chúng tôi đã nhận được thông điệp của bạn và sẽ phản hồi trong thời gian sớm nhất.</p>
      <p>Dưới đây là thông tin bạn đã gửi:</p>
      <ul>
        <li><strong>Họ và tên:</strong> ' . $name . '</li>
        <li><strong>Email:</strong> ' . $email . '</li>
        <li><strong>Chủ đề:</strong> ' . $subject . '</li>
        <li><strong>Nội dung:</strong> ' . nl2br($message) . '</li>
      </ul>
      <p>Cảm ơn bạn một lần nữa và chúng tôi mong được hỗ trợ bạn!</p>
      <p>Trân trọng,<br>WINE SHOP</p>
    </body>
    </html>
  ';

  // Gửi email thông qua Mailer
  $sendmails = new Mailer();
  $senmail = $sendmails->sendMailContact($thank_you_title, $thank_you_content, $email);
  echo '<script>alert("Gửi liên hệ thành công.")</script>';
}
?>




<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="contact">
  <div class="container h-100">
    <div class="blog-banner">
      <div class="text-center">
        <h1>Liên hệ với chúng tôi</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liên hệ với chúng tôi</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- ================ end banner area ================= -->

<!-- ================ contact section start ================= -->
<section class="section-margin--small">
  <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4">
      <div id="map" style="height: 420px;"></div>
      <script>
        function initMap() {
          var canthoLocation = { lat: 10.0451, lng: 105.7469 };

          var grayStyles = [
            {
              featureType: "all",
              stylers: [
                { saturation: -90 },
                { lightness: 50 }
              ]
            },
            { elementType: 'labels.text.fill', stylers: [{ color: '#A3A3A3' }] }
          ];

          var map = new google.maps.Map(document.getElementById('map'), {
            center: canthoLocation,
            zoom: 12,
            styles: grayStyles,
            scrollwheel: false
          });
        }
      </script>

      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOHe4My8vfDIn9TcKo5WYbsbxIyhydGp8&callback=initMap&loading=async"></script>


    </div>


    <div class="row">
      <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3>Thành phố Cần Thơ</h3>
            <p>Quận Ninh Kiều</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-headphone"></i></span>
          <div class="media-body">
            <h3><a href="tel:454545654">0987654321</a></h3>
            <p>Mở cửa từ 8h sáng - 8h tối</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
            <p>Gửi liên hệ cho chúng tôi!</p>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-9">
        <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
          <div class="row">
            <div class="col-lg-5">
              <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" placeholder="Nhập tên của bạn">
              </div>
              <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" placeholder="Nhập email của bạn">
              </div>
              <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" placeholder="Nhập tiêu đề">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="form-group">
                <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5"
                  placeholder="Nhập nội dung của bạn"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group text-center text-md-right mt-3">
            <button type="submit" class="button button--active button-contactForm">Gửi</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- ================ contact section end ================= -->