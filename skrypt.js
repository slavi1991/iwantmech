var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
function Ludzik (PosX,PosY,kolor){
	this.x = PosX; 						// polozenie
	this.y = PosY;
	this.kolor = kolor;
	this.clear = function(){
		ctx.clearRect(this.x,this.y,10,5);	
	}
	this.drawLudzik = function (){
		ctx.fillStyle = this.kolor;
		ctx.fillRect(this.x,this.y,20,20);	//wymiary ludzika
	}
	this.krok = 10;                   //ruch
	this.RuchLewo = function(){
		this.x -= this.krok;
	}
	this.RuchPrawo = function(){
		this.x += this.krok;
		}
	this.RuchGora = function(){
		this.y -= this.krok;
	}
	this.RuchDol = function(){
		this.y += this.krok;
	}
	this.klawisz = 0;	
	this.Kolizja = function (){        //sprawdzenie kolizji
		if(Trawa.y <= (this.y + this.krok) ){
		return true;
		}
		else {
		return false;
		}
	}
		
		
}
var redLudzik = new Ludzik (100,100,"red");
var blueLudzik = new Ludzik (150,150,"blue");
redLudzik.drawLudzik();
blueLudzik.drawLudzik();

window.addEventListener('keydown',function(e){		//klawiatura
	redLudzik.klawisz = e.keyCode;
	if(redLudzik.klawisz == 37){
	redLudzik.clear();
	redLudzik.RuchLewo();
	redLudzik.drawLudzik(); 
	}
	if(redLudzik.klawisz == 38){
	redLudzik.clear();
	redLudzik.RuchGora();
	redLudzik.drawLudzik(); 
	}
	if(redLudzik.klawisz == 39){
	redLudzik.clear();
	redLudzik.RuchPrawo();
	redLudzik.drawLudzik(); 
	}
	if(redLudzik.klawisz == 40){
	redLudzik.clear();
		if(!redLudzik.Kolizja()){
		redLudzik.RuchDol();
		redLudzik.drawLudzik();
		} 
	}
});
//teren
function Teren (PosX,PosY,width,height,kolor){
		this.x = PosX;
		this.y = PosY;
		this.width = width;
		this.height = height;
		this.kolor = kolor;
		this.DrawTeren = function (){
			ctx.fillStyle = this.kolor;
			ctx.fillRect(this.x,this.y,this.width,this.height);
		}
		
}
var Trawa = new Teren (0,550,800,40,"green");
Trawa.DrawTeren();	









