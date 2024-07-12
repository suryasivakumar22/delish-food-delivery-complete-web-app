$(".cla").click(function(){
			let tk =$(this).attr("id");
			window[tk+'ho'] = 1;
			//window[tk+'he'] = 0;
			console.log(tk);
			//console.log(window[tk+'ho']);
			let fk = '.'
			let ok = '#'
			let	rk = fk.concat(tk);
			let mk = ok.concat(tk);
			$(mk).hide();
			let lk = mk.substring(0, mk.length-1);
			let bk = lk.concat('b');
			let pk = lk.concat('d');
			let sk = lk.concat('c');
			let o = lk.concat('o');
			let rmkkk = tk.substring(0,);
			//console.log(rk);
			$(rk).addClass("ho");
			$(rk).show();
			let opk = $(o).val();			
			let  yob = tk.substring(0,tk.length - opk.length -1);
			let omk = tk.substring(0,yob)
			let rkoo = $("#hnu").val();
			
			$.post("choteladd.php",
					{
						rko : rkoo,
						oppk : opk,
						enna :tk,
						ov : yob,
						qty : 1,
					});
			
			$(pk).click(function(){
				window[tk+'ho'] = window[tk+'ho'] + 1;
				let mo = window[tk+'ho']
				$.post("chotelupdate.php",
					{
						qty1 : window[tk+'ho'],
						tok : tk,
					});
				$(bk).text(window[tk+'ho']);
				
			});
			$(sk).click(function(){
				//console.log(sk);
				//console.log(window[tk+'ho']);
				window[tk+'ho'] -= 1;
				$.post("chotelupdateminus.php",
					{
						qty12 : window[tk+'ho'],
						tikk : tk,
					});
				if (window[tk+'ho']>0){
					//console.log(window[tk+'ho'])
					$(bk).text(window[tk+'ho']);
				}else if(window[tk+'ho']<1){	
					//window[tk + 'he'] +=1;
					$.post("hotl.php",
					{
						tio : tk,		
					}
					);
					$(mk).show()
					$(rk).hide();
					//console.log(window[tk+'he'])
				}
				
			});
		
});
