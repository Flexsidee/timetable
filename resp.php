//this is the page that is used to send the data(resp) that will displayed in each pages of the timetable
resp['period'].map(re=>{
    re.view.map(vw=>{
        lects.push({day:re.day, from:re.start_time, to:re.end_time, duration:re.duration,dept_code:vw.dept_code, class_id:vw.class_id, course_code:vw.course_code, surname:re.surname, tel:re.tel, firstname:re.firstname, address_name:re.address_name, venue_name:re.venue_name})
    });
});