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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="../css/announcement.css">
<body style="background-color:  #fffcfc">
    
    <section id="cards">
        <div class="container py-2">
            <div class="d-flex flex-column flex-wrap align-items-center ">
                <div class="col-lg-4 col-md-6 mb-4  ">
                    <div class="shadow-sm border-0 rounded" style="width: 600px;height: 400px;background-color: #2f2f30;margin-bottom: 100px;">
                        <div class="card-body">
                            <div class="user-picture">
                                <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="shadow-sm rounded-circle" height="80" width="80"style="padding-bottom: 10px" />
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
                    <div class="shadow-sm border-0 rounded" style="width: 600px;height: 400px;background-color:#2f2f30;margin-bottom: 100px;">
                        <div class="card-body">
                            <div class="user-picture">
                                <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="shadow-sm rounded-circle" height="130" width="130"style="padding-bottom: 10px" />
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
    <div class="chat-box-container" style="margin-left: 36.5%;">
        <textarea rows="2" placeholder="Your message" style="text-align: justify"></textarea>
        <button class="btn-send-message">Send</button>
    </div>
</body>

</html>