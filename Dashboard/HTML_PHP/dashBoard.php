<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="import" href="component.html">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body onload="myFunc('block','none','none','none','none')">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script>
    function myFunc(a,b,c,d,e){
    let id_1 = document.getElementById("1").style.display = a;
    let id_2 = document.getElementById("2").style.display= b;
    let id_3 = document.getElementById("3").style.display = c;
    let id_4 = document.getElementById("4").style.display = d;
    let id_5 = document.getElementById("5").style.display = e;
    // if (id_s == '1') {
    //     id_1.style.display = "block";
    //     id_2.style.display = "none";
    //     id_3.style.display = "none";
    //     id_4.style.display = "none";
    //     id_5.style.display = "none";
    // }
    // if (id_s == '2') {
       
    //     id_1.style.display = "none";
    //     id_2.style.display = "block";
    //     id_3.style.display = "none";
    //     id_4.style.display = "none";
    //     id_5.style.display = "none";
    // }
    // if (id_s == '3') {
    //     id_2.style.display = "none";
    //     id_1.style.display = "none";
    //     id_4.style.display = "none";
    //     id_5.style.display = "none";
    //     id_3.style.display = "block";
    // }
    // if (id_s == '4') {
    //     id_4.style.display = "block";
    //     id_2.style.display = "none";
    //     id_3.style.display = "none";
    //     id_1.style.display = "none";
    //     id_5.style.display = "none";
    // }
    // if (id_s == '5') {
    //     id_5.style.display = "block";
    //     id_2.style.display = "none";
    //     id_3.style.display = "none";
    //     id_4.style.display = "none";
    //     id_1.style.display = "none";
    // }
    
}
</script>
<div class="wrapper">
    <div class="sidebar">
        <h2 style="color:#0175c2;">Student Corner</h2>
        <ul>
            <li ><a href="#1" onclick="myFunc('block','none','none','none','none')"><i class="fas fa-bullhorn" ></i>Announcements</a></li>
            <li><a href="#2" onclick="myFunc('none','block','none','none','none')"><i class="fas fa-archive"></i>Articles</a></li>
            <li><a href="#3" onclick="myFunc('none','none','block','none','none')"><i class="fas fa-file" aria-hidden="true" ></i>Notes</a></li>
            <li><a href="#4" onclick="myFunc('none','none','none','block','none')"><i class="fas fa-user"></i>Lecturers Profile</a></li>
            <!-- <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li> --> 
            <li><a href="#5" onclick="myFunc('none','none','none','none','block')"><i class="fas fa-info-circle"></i>About</a></li>
        </ul> 
        
        <div class="social_media" style="margin-bottom: 10px;">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  
        <div class="info">
          <div id="1" style="height: 600px;">
          <section id="cards">
            <div class="container py-2">
                <!-- cards -->
                <div class="coloumn" style="margin-left: 15%;">
                    <div class="col-lg-4 col-md-6 mb-4 pt-5 " >
                        <div class="card shadow-sm border-0" style="width: 700px;height:600px;background-color:#394867;">
                            <div class="card-body" >
                                <div class="user-picture" style="float: left; margin:20px">
                                    <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="shadow-sm rounded-circle" height="130" width="130" />
                                </div>
                                <div class="user-content">
                                    <h5 class="text-capitalize user-name">Carry Johnshon</h5>
                                    <p class=" text-capitalize text-muted small blockquote-footer">Cs Department</p>
                                    <!-- <div class="small">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="fas fa-star text-light"></i>
                                    </div> -->
                                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                        quia commodi.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                        quia commodi.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                        quia commodi.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                        quia commodi.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                        quia commodi.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                        quia commodi.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                        quia commodi.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                        quia commodi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 pt-5 " >
                        <div class="card shadow-sm border-0" style="width: 700px;">
                            <div class="card-body" >
                                <div class="user-picture">
                                    <img src="https://images.unsplash.com/photo-1495603889488-42d1d66e5523?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=130&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=130" class="shadow-sm rounded-circle" height="130" width="130" />
                                </div>
                                <div class="user-content">
                                    <h5 class="text-capitalize user-name">Carry Johnshon</h5>
                                    <p class=" text-capitalize text-muted small blockquote-footer">EC Department</p>
                                    <!-- <div class="small">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="fas fa-star text-light"></i>
                                    </div> -->
                                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo harum repellendus aut itaque. Temporibus quaerat dolores ut, cupiditate molestiae commodi! Distinctio praesentium, debitis aut minima doloribus earum
                                        quia commodi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- /cards -->
        </section>
        <!-- /Ui cards -->
        </div>



<!-- *********************************************************************************************************************&***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************** -->

          <div id="2"style="height: 600px;"> A sed nobis ut exercitationem atque accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos perferendis eos? Consequuntur!</div>
        <!-- *********************************************************************************************************************&***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************** -->
          <div id="3"style="height: 600px;"> r culpa magni omnis vero odio suscipit vitae dolor quod dignissimos perferendis eos? Consequuntur!</div>
        <!-- *********************************************************************************************************************&***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************** -->
          <div id="4"style="height: 600px;">t, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos perferendis eos? Consequuntur!</div>
        <!-- *********************************************************************************************************************&***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************** -->
          <div id="5"style="height: 600px;">cing elit. A sed nobis ut exercitationem atque accusamus sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos perferendis eos? Consequuntur!</div>
        <!-- *********************************************************************************************************************&***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************** -->
      </div>
    </div>
</div>
</body>
</html>