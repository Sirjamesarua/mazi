<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mazi international</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="{{ asset('style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <style type="text/css">
    body{
        background-image: url('bg2.gif');
        background-size: cover;
        
        
        
        height: 100vh;
        padding:0;
        margin:0;
    }
  </style>
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body" style="opacity: 1">
              <div class="brand-wrapper">
                <h1>Ebube International Store</h1>
              </div>

              @if ($errors->any())
                <div class="container">
                    @foreach ($errors->all() as $error)
                        <p style="color: red">{{ $error }}.</p>
                    @endforeach
                </div>
            @endif
            
            @if (session('message'))
                <p style="color: green">{{session('message')}}</p>
            @endif

              <p class="login-card-description">Hello 👋🏾! Welcome to Ebube International Store</p>
              

               <div id='btn'>
                  <p><b>
                    <h5>I'm Zigi, your Ebube online assistant 👩🏾‍💻. <br>What can I help you with today?
                    I’m here and happy to assist​ 😀.</h5>
                  </b></p>

                  <br />
                  <button type="button" class="btn btn-outline-primary btn-rounded-lg" style="display: block" onclick="chat()"><b>Start a new conversation</b></button>
               </div>

               <form id='form' style="display:none" method="POST" action="{{route('sendEmail')}}">
                    @csrf                    <!-- Name input -->
                    <div class="form-outline">
                        <label class="form-label" for="name2">Name</label>
                        <input type="text" id="name2" class="form-control" name="name" required />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline">
                        <label class="form-label" for="email2">Email address</label>
                        <input type="email" id="email2" class="form-control" name="email" required />
                    </div>

                    <!-- password input -->
                    <div class="form-outline">
                        <label class="form-label" for="password2">Message</label>
                        <input type="textarea" id="password2" class="form-control" name="message" required />
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>

               <br />
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
                <div>
                    {{-- <i class="bi bi-messenger text-primary" style="font-size: 100%"></i> --}}
                    <a href="https://wa.me/2348140480701?text=Hello"><i class="bi bi-whatsapp text-success mx-2" style="font-size: 100%"></i></a>
                    <a href="tel:08140480701"><i class="bi bi-telephone text-success" style="font-size: 100%"></i></a>
                </div>
            </div>
          </div>
        </div>
      </div>
      

    </div>
  </main>

  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">

    function chat(){
        document.getElementById('form').style.display='block'
        document.getElementById('btn').style.display='none'
    }


  </script>

</body>
</html>
