const mes=['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
const dateTo = document.getElementById('flyout');
const dateBack = document.getElementById('flyback');
const tableCurrentFrom = document.querySelector('.dateFrom table');
const tableCurrentBack = document.querySelector('.dateBack table');
const prevMonthFrom = document.querySelector('.dateFrom .prev');
const nextMonthFrom = document.querySelector('.dateFrom .next');
const prevMonthBack = document.querySelector('.dateBack .prev');
const nextMonthBack = document.querySelector('.dateBack .next');
let d = new Date();
let y = d.getFullYear();
let m = d.getMonth();
let xFrom = 0, xBack = 0; 
let countFrom = 0, countBack = 0;
let arrFrom = calendarFrom(y, m); 
let arrBack = calendarBack(y, m); 
addHandler(dateTo, 'click', () => {	
	tableCurrentFrom.classList.toggle('hid');	
});
addHandler(dateBack, 'click', () => {
	tableCurrentBack.classList.toggle('hid');
});
addHandler(prevMonthFrom, 'click', () => {	
	countFrom--;
	nextMonthFrom.classList.remove('hid')
	if(countFrom<=-11) prevMonthFrom.classList.add('hid');	
	openMonthFrom(prevMonthFrom);
});
addHandler(nextMonthFrom, 'click', () => {	
	countFrom++;
	prevMonthFrom.classList.remove('hid');
	if(countFrom>=11) nextMonthFrom.classList.add('hid');		
	openMonthFrom(nextMonthFrom);	
});
addHandler(prevMonthBack, 'click', () => {	
	countBack--;
	nextMonthBack.classList.remove('hid')
	if(countBack<=-11) prevMonthBack.classList.add('hid');	
	openMonthBack(prevMonthBack);
});
addHandler(nextMonthBack, 'click', () => {	
	countBack++;
	prevMonthBack.classList.remove('hid');
	if(countBack>=11) nextMonthBack.classList.add('hid');		
	openMonthBack(nextMonthBack);	
});
function openMonthFrom(arrow) {
	if(arrow == prevMonthFrom) xFrom++;				
	else xFrom--;	
	arrFrom = calendarFrom(y, m-xFrom);
}
function openMonthBack(arrow) {
	if(arrow == prevMonthBack) xBack++;				
	else xBack--;	
	arrBack = calendarBack(y, m-xBack);
}
function calendarFrom(year, month) {	
	if(month > 11) {
		month = month%12;
		year++;		
	}
	if(month < 0) {
		month = month+12;
		year--;		
	}
	let days=Date.UTC(year, month+1)-Date.UTC(year, month); 
	days/=1000*60*60*24;
	let startDay = new Date(year,month);
	let index=(startDay.getDay()+6)%7;	
	let caption = document.querySelector('.dateFrom .caption');
		caption.innerHTML = `${mes[month]} ${year}`;
	let td = document.querySelectorAll('.dateFrom tbody td');	
	let k=1-index;
	for(let i=0; i<td.length; i++) {
		td[i].innerHTML='';
		if(k>0 && k<=days) td[i].innerHTML = k;	
		k++;		
	};	
	return [year, month+1];		
};

function calendarBack(year, month) {	
	if(month > 11) {
		month = month%12;
		year++;		
	}
	if(month < 0) {
		month = month+12;
		year--;		
	}
	let days=Date.UTC(year, month+1)-Date.UTC(year, month); 
	days/=1000*60*60*24;
	let startDay = new Date(year,month);
	let index=(startDay.getDay()+6)%7;	
	let caption = document.querySelector('.dateBack .caption');
		caption.innerHTML = `${mes[month]} ${year}`;
	let td = document.querySelectorAll('.dateBack tbody td');	
	let k=1-index;
	for(let i=0; i<td.length; i++) {
		td[i].innerHTML='';
		if(k>0 && k<=days) td[i].innerHTML = k;	
		k++;		
	};
	return [year, month+1]; 
};
const datasFrom = document.querySelectorAll('.dateFrom tbody td');
const datasBack = document.querySelectorAll('.dateBack tbody td');
datasFrom.forEach((data) => {
	addHandler(data, 'click', () => {
		let selection = data.textContent+'.';
		selection += arrFrom[1]+'.'+arrFrom[0];
		dateTo.value = selection;
		tableCurrentFrom.classList.add('hid');	
	})
});
datasBack.forEach((data) => {
	addHandler(data, 'click', () => {
		let selection = data.textContent+'.';
		selection += arrBack[1]+'.'+arrBack[0];
		dateBack.value = selection;
		tableCurrentBack.classList.add('hid');
	})
});