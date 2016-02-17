<!--Sax-->
<?php include "nav.php"; ?>
<div class="center">
    <!--<img src="river.JPG" style="width:100%; height:100%">-->
    <div class="centertitle">Our Work</div>
    <div class="box">
    
        <div class="dropdown">
            <h1 style="display:inline-block">Genres: </h1>
            <span style="display:inline-block">Genre Selector</span>
            <div class="dropdown-content">
                <p>Hello World!</p>
            </div>
        </div>
    
    
    </div>
    
    
    
</div>
<style>
    .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
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
        top:0;
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

</style>