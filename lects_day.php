lects_day=lects.filter(lect=>{return lect.day==dy.day && lect.class_id==dept.class_id});
                    tr='<tr><td>'+dy.day_name+'</td><td>'+dept.level_name+'</td><td>'+dept.dept_code+'</td>';
                    skip=0;
                    for(n=8; n<18; n++){
                        lr=lects_day.filter(l=>{return (l.from==n)});
                        if(lr.length>0){
                            skip=lr[0].duration-1;
                            tr+='<td colspan="'+lr[0].duration+'">'+lr[0].course_code+' '+lr[0].surname+' '+lr[0].venue_name+'<br/>'+lr[0].tel+'</td>';
                        }else if(skip==0){
                            tr+='<td></td>';
                        }else if(skip>0){
                            skip--;
                        }
                    }
                    tr+='</tr>';
                    i('tbody').innerHTML+=tr;

                    })
                    