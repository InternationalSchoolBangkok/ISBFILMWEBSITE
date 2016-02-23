<!--Sax-->
<?php include "nav.php"; ?>
<div class="center">
    <!--<img src="river.JPG" style="width:100%; height:100%">-->
    <div class="centertitle">Our Work</div>
    <div class="box">
    
        <div class="dropdown">
            <h1 style="display:inline-block">Genres: </h1>
            
            <div class="dropdown-content">
                <ul>
                    <li class="genreselect"><a href="#action">Action</a></li>
                    <li class="genreselect"><a href="#Horror">Horror</a></li>
                    <li class="genreselect"><a href="#scifi">Sci-Fi</a></li>
                    <li class="genreselect"><a href="#drama">Drama</a></li>
                    <li class="genreselect"><a href="#fiction">Fiction</a></li>
                </ul>
            </div>
        </div>
    
    
    </div>
    
    
    <div class="genre">
        <table>
            <tr id="action">
                <td><img src="12696230_10204562579344126_562056904_n.jpg"></td>
                <td>
                    <div class="text">
                        <h1>Action</h1>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </div>
                </td>
            </tr>
            
            <tr id="Horror">
                <td><img src="12746464_10204562578984117_1338917545_n.jpg"></td>
                <td>
                    <div class="text">
                        <h1>Horror</h1>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </div>
                </td>
            </tr>
            
        
        </table>
    
    
    </div>
</div>
<style>
    .dropdown {
    position: relative;
    display: inline-block;
        text-align: center;
        width:100%;
        padding-top: 30px;
}

.dropdown-content {
    display: none;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
    line-height: 20px;
}
    .genreselect{
        text-align: center;
        display: block;
    
    }
    .genreselect a{
        color:black;
    }
    
    .genre{
        width: 75%;
        margin: 0 auto;
        margin-top: 40vh;
        
    }
    .genre img{
        width:20vw;
    }
    

    
    .box{
        color:red;
        background-color: RGBA(207, 222, 241, 0.75);
        width:50vw;
        height:20vh;
        position: absolute;
        top: 30vh;
        left: 50%;
        /* bring your own prefixes */
        transform: translate(-50%, -50%);
    }
    
    .centertitle{
        text-align: center;
        position: absolute;
        text-align: center;
        color:black;
        top:30;
        right:0;
        left:0;
        font-size:5vh;

    }
    .center{
        width:100vw;
        height:200vh;
        position: relative;
        margin: 0;
        background-color: #BD9D00;
        padding-top: 10vh;

    }

    *{
        margin: 0;
        color:white;
        font-family: Helvetica;
    }
    a{
        text-decoration: none;
    }

</style>