<style type="text/css">
    #progressbar {
        width:100px;
        height:20px;
        display:block;
        border-left:1px solid #ccc;
        border-right:1px solid #ccc;
        border-top:1px solid #ccc;
        border-bottom:1px solid #ccc;		
        overflow:hidden;
        background-color: white;
    }

    #progress {
        display:block;
        height:100px;
        width:0%;
    }

    .progressbarValid {
        background-color:green;
        background-image: -o-linear-gradient(-90deg, #8AD702 0%, #389100 100%);
		background-image: -moz-linear-gradient(-90deg, #8AD702 0%, #389100 100%);
		background-image: -webkit-linear-gradient(-90deg, #8AD702 0%, #389100 100%);
		background-image: -ms-linear-gradient(-90deg, #8AD702 0%, #389100 100%);
		background-image: linear-gradient(-90deg, #8AD702 0%, #389100 100%);
    }

    .progressbarMeioValid {
        background-color:yellow;
        background-image: -o-linear-gradient(-90deg, #fce630 0%, #9b8e1d 100%);
		background-image: -moz-linear-gradient(-90deg, #fce630 0%, #9b8e1d 100%);
		background-image: -webkit-linear-gradient(-90deg, #fce630 0%, #9b8e1d 100%);
		background-image: -ms-linear-gradient(-90deg, #fce630 0%, #9b8e1d 100%);
		background-image: linear-gradient(-90deg, #fce630 0%, #9b8e1d 100%);
    }	

    .progressbarInvalid {
        background-color:red;
        background-image: -o-linear-gradient(-90deg, #F94046 0%, #92080B 100%);
		background-image: -moz-linear-gradient(-90deg, #F94046 0%, #92080B 100%);
		background-image: -webkit-linear-gradient(-90deg, #F94046 0%, #92080B 100%);
		background-image: -ms-linear-gradient(-90deg, #F94046 0%, #92080B 100%);
		background-image: linear-gradient(-90deg, #F94046 0%, #92080B 100%);
    }

    #complexity {
        width:100%;
        text-align:center;
        font-family:"Helvetica Neue", "Helvetica", Arial, sans-serif;
        font-weight:normal;
        font-size:12px;
        line-height:20px;
        margin-top:0px;
    }


table.rodape {
	font: 11px/24px Verdana, Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width: 800px;
	}	
	
table.navegacao {
	font:bold 12px Helvetica, Verdana, Arial, sans-serif;
	color: #ffffff;
	border: 0px solid #000000;
	width: 800px;
	background: #015697;
	}	
	
td.home{
	width: 550px;
	text-align: left;		
	}		

td.data{
	width: 250px;
	text-align: right;	
	border: 0px solid #ffffff;
	}

tr.red {
	font:bold 12px Helvetica, Verdana, Arial, sans-serif;
	border-top: 1px solid #FB7A31;
	border-bottom: 1px solid #FB7A31;
	background: #FF9B9B;
	}
	
tr.rodape {
	font: 12px Helvetica, Verdana, Arial, sans-serif;
	border-top: 0px solid #FB7A31;
	border-bottom: 0px solid #CCC;
	background: #ffffff;
	}	
	
td.rodape {
	border-top: 0px solid #CCC;
	border-bottom: 0px solid #CCC;
	padding: 0 0.5em;
	}

table.grafico{
    border: 0px solid #000000;
    background: #cfe8ff;
}

td.grafico{
    text-align: justify;
    color: #444444;
}

#footer { 
position: fixed;
width: 100%;
left: //0px ou %//;

top: 90%;
height: 10%;
background-color: #ffffff ;
}

</style>