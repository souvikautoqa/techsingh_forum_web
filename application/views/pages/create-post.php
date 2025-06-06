<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <meta name="description" content="Forum & Community Discussions HTML Template">
    <meta name="keywords" content="bootstrap 5, forum, community, support, social, q&a, mobile, html">
    <meta name="robots" content="all,follow">

    <script>
        //Check local storage
        let localS = localStorage.getItem('theme')
        themeToSet = localS

        // If local storage is not set, we check the OS preference	
        if (!localS) {
            themeToSet = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        //Set the correct theme
        document.documentElement.setAttribute('data-theme', themeToSet)
    </script>

    <!-- ==============================================
     CSS Styles
    =============================================== -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendors/simplebar/simplebar.min.css">
    <link rel="stylesheet" href="assets/vendors/aos/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/external.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- ==============================================
     Fonts
    =============================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&amp;display=swap" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>


</head>

<body>


    <!-- Switcher Icon -->
    <div class="" id="theme-switcher">
        <i id="switcher-icon" class="bi bi-moon"></i>
    </div>

    <!-- Back to Top -->
    <a href="#" id="back-to-top"></a>

    <div class="vine-wrapper">

        <?php include 'header.php' ?>


        <!-- ==============================================
         Main
        =============================================== -->

        <section class="vine-main pt-5">
            <div class="container-fluid">
                <div class="row">


                    <!--/col-lg-3-->
                    <div class="col-lg-12 ps-lg- ">

                        <div class="events-container">
                            <div class="events-header">
                                <span class="events-title">
                                    <i class="megaphone-icon"></i> Post a new topic
                                </span>
                                <button class="close-btn"></button>
                            </div>


                            <div class="contact-form">

                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <label for="first_name">Topic Name: </label>
                                                <input type="text" name="first_name" id="first_name" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="pb-3 field-textarea">
                                                <label for="message">Message body:</label>
                                                <textarea id="editor" name="editorContent" rows="5"
                                                    cols="80"> </textarea>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row-reverse">
                                            <div class="col-md-2 mt-4">
                                                <div class="field-submit">
                                                    <input type="submit" value="Preview" class="btn btn-dark text-light"
                                                        name="submit">
                                                </div>
                                            </div> &nbsp;&nbsp;

                                            <div class="col-md-2 mt-4">
                                                <div class="field-submit">
                                                    <input type="submit" value="Submit" class="btn btn-org"
                                                        name="submit">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <label for="last_name">Upload attachment:</label>
                                                <input type="file" name="last_name" id="last_name"
                                                    placeholder="Enter your last name">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="pb-3 field-textarea">
                                                <label for="message">File comment:</label>
                                                <textarea name="message" id="message" rows="2"
                                                    placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <label for="email">Poll question:</label>
                                                <input type="text" name="email" id="email" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="pb-3 field-textarea">
                                                <label for="message">Poll options: </label>
                                                <textarea name="message" id="message" rows="2"
                                                    placeholder=""></textarea>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <input type="checkbox" name="phone_number" id="" placeholder=""> <label
                                                    for="phone_number">Allow re-voting (If enabled users are able to
                                                    change their vote.)</label>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <label for="phone_number">Options per user: (This is the number of
                                                    options each user may select when voting.)</label>
                                                <input type="text" name="phone_number" id="phone_number" value="1"
                                                    placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <label for="phone_number">Run poll for:(Enter 0 or leave blank for a
                                                    never ending poll.)</label>
                                                <input type="text" name="phone_number" id="phone_number" value="0 Days">
                                            </div>
                                        </div>




                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <input type="checkbox" name="" id="" placeholder=""><label
                                                    for="phone_number">Do not automatically parse URLs</label>

                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <input type="checkbox" name="" id="" placeholder=""><label
                                                    for="phone_number">Attach a signature (signatures can be altered via
                                                    the Settings)</label>

                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="pb-3">
                                                <input type="checkbox" name="" id="" placeholder=""><label
                                                    for="phone_number">Notify me when a reply is posted</label>

                                            </div>
                                        </div>

                                        <div class="col-md-4 mt-4">
                                            <div class="field-submit">
                                                <input type="submit" value="Submit" class="btn btn-mint" name="submit">
                                            </div>
                                        </div>

                                        <div class="col-md-4 mt-4">
                                            <div class="field-submit">
                                                <input type="submit" value="Cancel" class="btn btn-org" name="submit">
                                            </div>
                                        </div>

                                        <div class="col-md-4 mt-4">
                                            <div class="field-submit">
                                                <input type="submit" value="Preview" class="btn btn-dark text-light"
                                                    name="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>



                        </div>



                    </div><!--/col-lg-9-->

                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>

    </div><!--/vine-wrapper-->

    <!-- ==============================================
    Scripts
    =============================================== -->
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="assets/vendors/popper/popper.min.js"></script>
    <script src="assets/vendors/simplebar/simplebar.min.js"></script>
    <script src="assets/vendors/aos/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        document.addEventListener('contextmenu', event => {
            event.preventDefault();
        });

        document.querySelectorAll('.disabled').forEach(element => {
            element.style.pointerEvents = 'none';
        });
    </script>

    <script>
        const leftArrow = document.querySelector('.left-arrow');
        const rightArrow = document.querySelector('.right-arrow');
        const events = document.querySelector('.events');

        leftArrow.addEventListener('click', () => {
            events.scrollBy({ left: -200, behavior: 'smooth' });
        });

        rightArrow.addEventListener('click', () => {
            events.scrollBy({ left: 200, behavior: 'smooth' });
        });

    </script>

    <script>
        let currentSlide = 0;

        function moveSlide(direction) {
            const carouselInner = document.querySelector('.carousel-inner');
            const totalSlides = document.querySelectorAll('.content-slide').length;
            currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
            carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
        }
    </script>

    <script>
        // Re-enable right-click
        document.addEventListener("contextmenu", function (event) {
            event.stopPropagation(); // Allow right-click menu to work
        }, true);

        // Re-enable keyboard shortcuts
        document.addEventListener("keydown", function (event) {
            event.stopPropagation(); // Allow all key events to pass through
        }, true);

    </script>




    <script>
        // Attach CKEditor to the textarea
        CKEDITOR.replace('editor');
    </script>
</body>



</html>