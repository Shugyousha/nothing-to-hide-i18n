(function(exports){

	// Singleton
	var Game = {};
	exports.Game = Game;

	// Init config
	Game.init = function(config){
		Game.config = config;
	};

	// Start game
	var gameLoop;
	var gameKilled = false;
	var RAF = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame;
	Game.start = function(){

		var drawnSinceLastUpdate = false;

		// Update loop
		gameLoop = setInterval(function(){
			if(Game.level) Game.level.update();
			drawnSinceLastUpdate = false;
		},1000/30);

		// Draw Loop
		function draw(){

			if(!drawnSinceLastUpdate){
				drawnSinceLastUpdate = true;
				if(Game.level){
					Game.level.draw();
				}else{
					Display.clear();
				}
				Debug.fps();
			}

			// Cursor, draw anyway!...
			Cursor.draw();
			
			if(!gameKilled){ RAF(draw); }

		}
		draw();

		// BG Music
		createjs.Sound.play("music_bg",null,0,0,true,0.4,0);

		// First level
		Game.gotoLevel(0);

		// Cursor
		Cursor.init();

	};

	// End game
	Game.kill = function(){
		gameKilled = true;
		clearInterval(gameLoop);
	};

	// Level Flow
	Game.levelIndex = 0;
	Game.level = null;
	Game.clearLevel = function(){
		if(Game.level){
			Game.level.kill();
			Game.level = null;
		}
		Display.clear();
	};
	Game.gotoLevel = function(index){
		
		// Get next level config
		Game.levelIndex = index;
		var nextLevelName = Game.config.levels[Game.levelIndex];
		if(!nextLevelName) return false;

		// Go to next level
		Game.gotoLevelById(nextLevelName);
		return true;

	};
	Game.gotoLevelById = function(nextLevelName){
		
		// Find level
		Game.clearLevel();
		var levelConfig = Asset.level[nextLevelName];

		// Dimensions
		var lvlWidth = (levelConfig.map[0].length) * Map.TILE_SIZE;
		var lvlHeight = (levelConfig.map.length) * Map.TILE_SIZE;

		// Resize NOW
		var w = Math.min(lvlWidth, window.innerWidth);
		var h = Math.min(lvlHeight, window.innerHeight);
		Display.resize(w,h);

		// Go to level
		Game.level = new Level(levelConfig);

		// Index
		Game.levelIndex = Game.config.levels.indexOf(nextLevelName);

	};
	Game.nextLevel = function(){
		Game.levelIndex++;
		Game.gotoLevel(Game.levelIndex);
	};
	Game.resetLevel = function(){
		Game.gotoLevel(Game.levelIndex);
	};

	// DO A COOL SCENE TRANSITION
	Game.screenswipe = function(){
		
		// Copy Canvas
		var screenswipe = document.getElementById("screenswipe");
		screenswipe.width = Display.canvas.game.width;
		screenswipe.height = Display.canvas.game.height;
		var ctx = screenswipe.getContext("2d");
		ctx.drawImage(Display.canvas.game,0,0);

		// Place them in position
		var game = document.getElementById("game_container");
		var swipe = document.getElementById("swipe_container");
		swipe.style.top = "0%";
		swipe.style.left = "0%";
		game.style.top = "0%";
		game.style.left = "100%";

		// Then, swipe - ghetto
		var _createSwipe = function(pos,time){
			var s = -pos;
			var g = 100-pos;
			setTimeout(function(){
				swipe.style.left = s+"%";
				game.style.left = g+"%";
			},time);
		};
		_createSwipe(2,50);
		_createSwipe(5,100);
		_createSwipe(10,150);
		_createSwipe(20,200);
		_createSwipe(40,250);
		_createSwipe(70,300);
		_createSwipe(105,350);
		_createSwipe(110,400);
		_createSwipe(105,450);
		_createSwipe(102,500);
		_createSwipe(101,550);
		_createSwipe(100,600);

	}	

})(window);