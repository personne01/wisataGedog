<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body style=" background:#559eff;">
    <!-- <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f5f5f5"> -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
        <style>
            @import url(" https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            form {
                background: white;
                padding: 100px 20px 100px 20px;
                border-radius: 20px;
            }

            .content-3-5 .btn:focus,
            .content-3-5 .btn:active {
                outline: none !important;
            }

            .content-3-5 .width-left {
                width: 0%;
            }

            .content-3-5 .width-right {
                width: 100%;
                height: 100%;
                padding: 8rem 2rem;
                background-color: #559eff;
            }

            .content-3-5 .centered {
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .content-3-5 .right {
                width: 100%;
            }

            .content-3-5 .title-text {
                font: 600 1.875rem/2.25rem Poppins, sans-serif;
                margin-bottom: 0.75rem;
            }

            .content-3-5 .caption-text {
                font: 400 0.875rem/1.75rem Poppins, sans-serif;
                color: #a8adb7;
            }

            .content-3-5 .input-label {
                font: 500 1.125rem/1.75rem Poppins, sans-serif;
                color: #39465b;
            }

            .content-3-5 .div-input {
                font: 300 1rem/1.5rem Poppins, sans-serif;
                padding: 1rem 1.25rem;
                margin-top: 0.75rem;
                border-radius: 0.75rem;
                border: 1px solid #cacbce;
                color: #2a3240;
                transition: 0.3s;
            }

            .content-3-5 .div-input:focus-within {
                border: 1px solid #2ec49c;
                color: #2a3240;
                transition: 0.3s;
            }

            .content-3-5 .div-input input::placeholder {
                color: #cacbce;
                transition: 0.3s;
            }

            .content-3-5 .div-input:focus-within input::placeholder {
                color: #2a3240;
                outline: none;
                transition: 0.3s;
            }

            .content-3-5 .div-input .icon-toggle-empty-3-5 path,
            .content-3-5 .div-input:focus-within .icon path {
                transition: 0.3;
                fill: #2ec49c;
                transition: 0.3s;
            }

            .content-3-5 .input-field {
                font: 300 1rem/1.5rem Poppins, sans-serif;
                width: 100%;
                background-color: #fcfdff;
                transition: 0.3s;
            }

            .content-3-5 .input-field:focus {
                outline: none;
                transition: 0.3s;
            }

            .content-3-5 .forgot-password {
                font: 400 0.875rem/1.25rem Poppins, sans-serif;
                color: #cacbce;
                transition: 0.3s;
                text-decoration: none;
            }

            .content-3-5 .forgot-password:hover {
                color: #2a3240;
            }

            .content-3-5 .btn-fill {
                font: 500 1.25rem/1.75rem Poppins, sans-serif;
                background-image: linear-gradient(rgba(91, 203, 173, 1), rgba(39, 194, 153, 1));
                padding: 0.75rem 1rem;
                margin-top: 2.25rem;
                border-radius: 0.75rem;
                transition: 0.5s;
            }

            .content-3-5 .btn-fill:hover {
                background-image: linear-gradient(#2ec49c, #2ec49c);
                transition: 0.5s;
            }

            .content-3-5 .bottom-caption {
                font: 400 0.875rem/1.25rem Poppins, sans-serif;
                margin-top: 2rem;
                color: #2a3240;
            }

            .content-3-5 .green-bottom-caption {
                color: #2ec49c;
                font-weight: 500;
            }

            .content-3-5 .green-bottom-caption:hover {
                color: #2ec49c;
                cursor: pointer;
                text-decoration: underline;
            }

            @media (min-width: 576px) {
                .content-3-5 .width-right {
                    padding: 8rem 4rem;
                }

                .content-3-5 .right {
                    width: 58.333333%;
                }
            }

            @media (min-width: 768px) {
                .content-3-5 .right {
                    width: 66.666667%;
                }
            }

            @media (min-width: 992px) {
                .content-3-5 .width-left {
                    width: 48%;
                }

                .content-3-5 .width-right {
                    width: 52%;
                }

                .content-3-5 .right {
                    width: 75%;
                }
            }

            @media (min-width: 1200px) {
                .content-3-5 .right {
                    width: 58.333333%;
                }
            }
        </style>


        <?= $this->renderSection('content'); ?>


        <!-- Password toggle -->
        <script>
            function togglePassword() {
                var x = document.getElementById("password-content-3-5");
                if (x.type === "password") {
                    x.type = "text";
                    document
                        .getElementById("icon-toggle")
                        .setAttribute("fill", "#2ec49c");
                } else {
                    x.type = "password";
                    document
                        .getElementById("icon-toggle")
                        .setAttribute("fill", "#CACBCE");
                }
            }
        </script>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>