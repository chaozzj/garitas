function age_calc(date_of_birth)
{
	dateBirth = new Date(date_of_birth);
	//alert($("#date_of_birth").val());
	today = new Date();
	
	var timeDiff = Math.abs(today.getTime() - dateBirth.getTime());
	//alert(timeDiff);
	
	var miliseconds = timeDiff;
	var seconds = timeDiff/1000;
	var minutes = seconds/60;
	var hours = minutes/60;
	var days = hours/24;
	//alert(dateBirth);
	
	//alert(dateBirth.getMonth());
	var full_date = dateDiff(dateBirth, today, false);
	
	/*var months = full_date["months"];
	
	$("#miliseconds").val(miliseconds);
	$("#seconds").val(seconds);
	$("#minutes").val(minutes);
	$("#hours").val(hours);
	$("#days").val(days);
	$("#months").val(months);*/
	return full_date["years_group"]; 

	/*if(full_date["years_group"]<21){

	}*/
	/*$("#years_group").val(full_date["years_group"]);
	$("#months_group").val(full_date["months_group"]);
	$("#days_group").val(full_date["days_group"]);*/
}

function dateDiff(dt1, dt2)
{
	//alert(dt1.getMonth());
    /*
     * setup 'empty' return object
     */
    var ret = {days:0, months:0, years:0};

    /*
     * If the dates are equal, return the 'empty' object
     */
    if (dt1 == dt2) return ret;

    /*
     * ensure dt2 > dt1
     */
    if (dt1 > dt2)
    {
        var dtmp = dt2;
        dt2 = dt1;
        dt1 = dtmp;
    }

    /*
     * First get the number of full years
     */

    var year1 = dt1.getFullYear();
    var year2 = dt2.getFullYear();

    var month1 = dt1.getMonth();
    var month2 = dt2.getMonth();

    var day1 = dt1.getDate();
    var day2 = dt2.getDate();

    /*
     * Set initial values bearing in mind the months or days may be negative
     */

    ret['years_group'] = year2 - year1;
    ret['months'] = month2 - month1;
    ret['days_group'] = day2 - day1;

    /*
     * Now we deal with the negatives
     */

    /*
     * First if the day difference is negative
     * eg dt2 = 13 oct, dt1 = 25 sept
     */
    if (ret['days_group'] < 0)
    {
        /*
         * Use temporary dates to get the number of days remaining in the month
         */
        var dtmp1 = new Date(dt1.getFullYear(), dt1.getMonth() + 1, 1, 0, 0, -1);

        var numDays = dtmp1.getDate();

        ret['months'] -= 1;
        ret['days_group'] += numDays;

    }

    /*
     * Now if the month difference is negative
     */
    if (ret['months'] < 0)
    {
        ret['months'] += 12;
        ret['years_group'] -= 1;
    }

	ret['months_group'] = ret['months'];
	
	daysInLastMonth = new Date(dt2.getFullYear(), dt2.getMonth()+1, 0).getDate();
	
	ret['months'] = arrondir((ret['months'] + (ret['years_group']*12) +  ret['days_group']/daysInLastMonth),2);

    return ret;
}

function arrondir(laValue,num)
{
	montantArrondi = Math.round(laValue*100)/100;
	//alert(montantArrondi);
	if(num!=undefined)
	montantArrondi = laValue.toFixed(num);
	
	return montantArrondi;
}