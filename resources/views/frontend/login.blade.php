
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title> {{ config("app.name") }} </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
  

  <body>

    <div class="max-w-4xl mx-auto font-[sans-serif] text-[#333] p-6">
        <div class="text-center mb-16">
          <a href="javascript:void(0)"><img
            src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-52 inline-block' />
          </a>
          <h4 class="text-base font-semibold mt-3">Sign up into your account</h4>
        </div>
        <form>
          <div class="grid sm:grid-cols-2 gap-y-7 gap-x-12">
            <div>
              <label class="text-sm mb-2 block">First Name</label>
              <input name="name" type="text" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter name" />
            </div>
            <div>
              <label class="text-sm mb-2 block">Last Name</label>
              <input name="lname" type="text" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter last name" />
            </div>
            <div>
              <label class="text-sm mb-2 block">Email Id</label>
              <input name="email" type="text" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter email" />
            </div>
            <div>
              <label class="text-sm mb-2 block">Mobile No.</label>
              <input name="number" type="number" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter mobile number" />
            </div>
            <div>
              <label class="text-sm mb-2 block">Password</label>
              <input name="password" type="password" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter password" />
            </div>
            <div>
              <label class="text-sm mb-2 block">Confirm Password</label>
              <input name="cpassword" type="password" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Enter confirm password" />
            </div>
          </div>
          <div class="!mt-10">
            <button type="button" class="min-w-[150px] py-3 px-4 text-sm font-semibold rounded text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
              Sign up
            </button>
          </div>
        </form>
      </div>
  </body>
</html>