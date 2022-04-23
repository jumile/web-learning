let fromCity = document.getElementById('from'); 
let toCity = document.getElementById('to');
const switchCity = document.querySelector('.switch');
const singleFlight = document.querySelector('input[value="single"]');
const returnFlight = document.querySelector('input[value="return"]');
const returnCalendar = document.querySelector('.dateBack');
const adults = document.querySelectorAll('.adults img');
const children = document.querySelectorAll('.children a');
const babies = document.querySelectorAll('.babies a');
const totalAdult = document.getElementById('totalAdult');
const totalChilds = document.getElementById('totalChilds');
const totalBabies = document.getElementById('totalBabies');
addHandler(switchCity, 'click', () => {
	let x = fromCity.value;
	fromCity.value = toCity.value;
	toCity.value = x;	
});
addHandler(singleFlight, 'click', () => {
	returnCalendar.style.visibility='hidden';
});
addHandler(returnFlight, 'click', () => {
	returnCalendar.style.visibility='visible';
});
adults.forEach((adult, index) => {
	addHandler(adult, 'click', () => {			
		counterAdult(index);		
	})	
});
children.forEach((child, index) => {
	addHandler(child, 'click', (e) => {
		cancelReaction(e);
		counterChildren(index);		
	})	
});
babies.forEach((baby, index) => {
	addHandler(baby, 'click', (e) => {		
		cancelReaction(e);
		counterBabies(index);		
	})	
});
function counterAdult(id) {
	adults.forEach((adult, index) => {
		if(id >= index) adult.src = 'img/adult_select.png';
		else adult.src='img/adult.png';
	})
	totalAdult.value = id+1;
}
function counterChildren(id) {
	children.forEach((child, index) => {
		if(id === index) child.classList.add('active');
		else child.classList.remove('active');
	});
	totalChilds.value = id;
}
function counterBabies(id) {
	babies.forEach((baby, index) => {
		if(id === index) baby.classList.add('active');
		else baby.classList.remove('active');
	});
	totalBabies.value = id;
}