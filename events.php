<!--Sax-->
<?php include "nav.php"; ?>
<div class="center">
    <!--<img src="river.JPG" style="width:100%; height:100%">-->
    <div class="centertitle">Our Stuff</div>
    
    <div class="left">
        <div class="item">
            <img src="DSC_0536.jpg">
            <div class="subtitle">
                <h1>Title of Movie</h1>    
                Holy geez this movie is gr8
            </div>
        </div>    
    </div>
    
    <div class="right">
        <div class="item">
            <img src="DSC_0536.jpg">
            <div class="subtitle">
                <h1>Title of Movie</h1>    
                Holy geez this movie is gr8
            </div>
        </div>
    
    </div>
    
</div>
<style>
    .subhead{
        text-align: center;
        padding-top: 3vh;
        font-size:2em;
    }
    .bottom{
        width:100vw;
        height:30vh;
        background-color: black;
    }
    
    .centertitle{
        text-align: center;
        position: absolute;
        color:black;
        top:0;
        right:0;
        left:0;
        font-size:5vh;
        font-family: cursive;
    }
    .center{
        width:100vw;
        height:200vh;
        position: relative;
        margin: 0;
        background-color: #BD9D00;
        padding-top: 10vh;
        

    }
    
    .item{
        position: relative;
    }
    .center img{
        width:20vw;
        position: absolute;
    }
    .subtitle{
        float:right;
        width:25vw;
        padding-top: 2vh;
        
    }
    .left{
        width:48vw;
        height:200vh;
        float:left;
        position: relative;
        display: inline-block;
        padding: 10;
    }
    .right{
        width:48vw;
        height:200vh;
        position: relative;
        float:right;
        display: inline-block;
        padding: 10;
    }
    *{
        margin: 0;
        color:white;
        font-family: Helvetica;
    }

</style>