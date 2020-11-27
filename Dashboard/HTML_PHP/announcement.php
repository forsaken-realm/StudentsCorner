<?php
include('dashBoard.php');
?>


<!DOCTYPE html>
<html>

<head>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<script src="https://kit.fontawesome.com/b5cff000aa.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="../css/announcement.css">
<body style="background-color:  #fffcfc;scroll-behavior: smooth;" id="my-body">


<!--This code is about announcement pop up-->
<div id="my-overlay" ">
    <div class="my-form-popup" id="myForm">
        <form action="" class="form-container">
            <h1>Announce</h1>
            <div class="form-group" style="width: 300px">
                <label for="exampleFormControlTextarea1">Input Text</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">Semester</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose semester</option>
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <option>V</option>
                        <option>VI</option>
                        <option>VII</option>
                        <option>VIII</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Section</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button onclick="off()" type="button" class="btn btn-primary btn-sm bg-dark" style="background-color: #181717">Cancel</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary btn-sm bg">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>



<!--This is code is for Announcement Card-->
    <section id="cards">
        <div class="container py-2">
            <div class="d-flex flex-column flex-wrap align-items-center ">
                <div class="col-lg-4 col-md-6 mb-4  ">
                    <div class="shadow-sm border-0 rounded" style="width: 600px;height: 300px;background-color: #2f2f30;">
                        <div class="card-body">
                            <div class="my-user-profile-class float-left">
                                <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="" height="90" width="90"style="border-radius: 45px;" />
                            </div>
                            <div class="user-content">
                                <h5 class="text-capitalize user-name" style="color: white">Carry Johnshon</h5>
                                <p class=" text-capitalize text-light small blockquote-footer " >Web developer</p>
<!--                                <div class="small">-->
<!--                                    <i class="fas fa-star text-warning"></i>-->
<!--                                    <i class="fas fa-star text-warning"></i>-->
<!--                                    <i class="fas fa-star text-warning"></i>-->
<!--                                    <i class="fas fa-star-half-alt text-warning"></i>-->
<!--                                    <i class="fas fa-star text-light"></i>-->
<!--                                </div>-->
                                <p class="small text-light mb-0 " >Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                    quia commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, soluta perferendis! Iusto sequi, quae sunt iste voluptate rerum nulla perspiciatis accusantium cupiditate, officia reprehenderit sit, architecto totam quo eius dignissimos! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum animi, dolorum odio error voluptas quis, veritatis quisquam distinctio, molestias eligendi enim ipsam cum pariatur optio! Amet accusamus maxime voluptatem vel.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4  ">
                    <div class="shadow-sm border-0 rounded" style="width: 600px;height: 300px;background-color:#2f2f30;margin-bottom: 100px;">
                        <div class="card-body">
                            <div class="my-user-profile-class float-left">
                                <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="shadow-sm rounded-circle" height="90" width="90"/>
                            </div>
                            <div class="user-content">
                                <h5 class="text-capitalize text-light user-name">Carry Johnshon</h5>
                                <p class=" text-capitalize text-light small blockquote-footer">Web developer</p>
                                <!--                                <div class="small">-->
                                <!--                                    <i class="fas fa-star text-warning"></i>-->
                                <!--                                    <i class="fas fa-star text-warning"></i>-->
                                <!--                                    <i class="fas fa-star text-warning"></i>-->
                                <!--                                    <i class="fas fa-star-half-alt text-warning"></i>-->
                                <!--                                    <i class="fas fa-star text-light"></i>-->
                                <!--                                </div>-->
                                <p class="small text-light mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                    quia commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, soluta perferendis! Iusto sequi, quae sunt iste voluptate rerum nulla perspiciatis accusantium cupiditate, officia reprehenderit sit, architecto totam quo eius dignissimos! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum animi, dolorum odio error voluptas quis, veritatis quisquam distinctio, molestias eligendi enim ipsam cum pariatur optio! Amet accusamus maxime voluptatem vel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<!--this code is for Floating button for pop up form -->
    <div class="my-pop-up-button" onclick="on()">
        <i class="fas fa-plus" style="padding-top: 20px;"></i>
    </div>


<script>
    function on() {
        document.getElementById("my-overlay").style.display = "block";
        // document.getElementById("my-body").style.overflow = "hidden";
    }

    function off() {
        document.getElementById("my-overlay").style.display = "none";
        // document.getElementById("my-body").style.overflow = "scroll";
    }
</script>
</body>

</html>