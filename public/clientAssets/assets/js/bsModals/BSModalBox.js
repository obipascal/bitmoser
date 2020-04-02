class BSModal{
	
	getUniqueId(){
		let char = 'abcdefghijklmnopqrstuvwxyz'.split('');
		let num = '0123456789'.split('');
		let uniqId = [];
		
		for(let i=0; i < char.length; i++)
			{
				let rndInt = this.getRandomInt(0, 10);
				if(i / 2 == 1)
					{
						uniqId.push(char[rndInt].toLowerCase() + num[rndInt]);
					}
				else if(i % 2 == 0)
					{
						uniqId.push(char[rndInt].toUpperCase() + num[rndInt]);
					}
				else
					{
						uniqId.push(char[rndInt] + num[rndInt]);
					}
			}	
		
		console.log(uniqId);
	}

	getRandomInt(min, max) {
		min = Math.ceil(min);
		max = Math.floor(max);
		return Math.floor(Math.random() * (max - min)) + min; //The maximum is exclusive and the minimum is inclusive
	}
}

let bsm = new BSModal
bsm.getUniqueId();



