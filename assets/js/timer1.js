function getTimeRemaining(endtime){var t=Date.parse(endtime)-Date.parse(new Date),seconds=Math.floor(t/1e3%60),minutes=Math.floor(t/1e3/60%60),hours=Math.floor(t/36e5%24),days;return{total:t,days:Math.floor(t/864e5),hours:hours,minutes:minutes,seconds:seconds}}function initializeClock(id,endtime){var clock=document.getElementById(id),daysSpan=clock.querySelector(".days"),hoursSpan=clock.querySelector(".hours"),minutesSpan=clock.querySelector(".minutes"),secondsSpan=clock.querySelector(".seconds");function updateClock(){var t=getTimeRemaining(endtime);daysSpan.innerHTML=t.days,hoursSpan.innerHTML=("0"+t.hours).slice(-2),minutesSpan.innerHTML=("0"+t.minutes).slice(-2),secondsSpan.innerHTML=("0"+t.seconds).slice(-2),t.total<=0&&clearInterval(timeinterval)}updateClock();var timeinterval=setInterval(updateClock,1e3)}var deadline=new Date(Date.parse(new Date)+1296e6);initializeClock("clockdiv-1",deadline);