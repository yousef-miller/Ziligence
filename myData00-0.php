<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($ary_qtr);								//to purge variables
    $ary_qtr[0] = array('Null');
    $ary_qtr[1] = array('.01.10.07.04');				//'YEQ3Q2Q1'
    $ary_qtr[2] = array('.02.11.08.05');
    $ary_qtr[3] = array('.03.12.09.06');
    $ary_qtr[4] = array('.04.01.10.07');
    $ary_qtr[5] = array('.05.02.11.08');
    $ary_qtr[6] = array('.06.03.12.09');
    $ary_qtr[7] = array('.07.04.01.10');
    $ary_qtr[8] = array('.08.05.02.11');
    $ary_qtr[9] = array('.09.06.03.12');
    $ary_qtr[10] = array('.10.07.04.01');
    $ary_qtr[11] = array('.11.08.05.02');
    $ary_qtr[12] = array('.12.09.06.03');  

   unset($ary_ye); 								//to purge variables
    $ary_ye[0] = array('Null');

    $ary_ye[1] = array('.00.01.01.01');				//'YEQ3Q2Q1'
    $ary_ye[2] = array('.00.01.01.01');
    $ary_ye[3] = array('.00.01.01.01');

    $ary_ye[4] = array('.00.00.01.01');
    $ary_ye[5] = array('.00.00.01.01');
    $ary_ye[6] = array('.00.00.01.01');

    $ary_ye[7] = array('.00.00.00.01');
    $ary_ye[8] = array('.00.00.00.01');
    $ary_ye[9] = array('.00.00.00.01');

    $ary_ye[10] = array('.00.00.00.00');
    $ary_ye[11] = array('.00.00.00.00');
    $ary_ye[12] = array('.00.00.00.00');      

    //_____reverse order of ary_ye  ---> these values are for translating the filing period to stdrdzd fiscal reporting years
    unset($ary_ye_2); 							//to purge variables
    $ary_ye_2[0] = array('Null');

    $ary_ye_2[1] = array('.01.00.00.00');				//'YEQ3Q2Q1'
    $ary_ye_2[2] = array('.01.00.00.00');
    $ary_ye_2[3] = array('.01.00.00.00');

    $ary_ye_2[4] = array('.01.01.00.00');				//Q3 = JANUARY :: y - 1
    $ary_ye_2[5] = array('.01.01.00.00');				//Q3 = FEBRUARY :: y - 1
    $ary_ye_2[6] = array('.01.01.00.00');				//Q3 = MARCH :: y - 1	

    $ary_ye_2[7] = array('.00.00.00.01');				//Q1 = OCTOBER :: y+1
    $ary_ye_2[8] = array('.00.00.00.01');				//Q1 = NOVEMBER :: y + 1
    $ary_ye_2[9] = array('.00.00.00.01');				//Q1 = DECEMBER :: y+1

    $ary_ye_2[10] = array('.00.00.00.00');
    $ary_ye_2[11] = array('.00.00.00.00');
    $ary_ye_2[12] = array('.00.00.00.00');      

    unset($tArray); $x = -1;						//to purge variables
    $tArray[++$x] = array('Null');					//list of all periods being covered
    $tArray[++$x] = array('1980q1'); 	//1
    $tArray[++$x] = array('1980q2');	//2
    $tArray[++$x] = array('1980q3');	//3
    $tArray[++$x] = array('1980q4');	//4
    $tArray[++$x] = array('1980fy');	//5

    $tArray[++$x] = array('1981q1');	//6
    $tArray[++$x] = array('1981q2');	//7
    $tArray[++$x] = array('1981q3');	//8
    $tArray[++$x] = array('1981q4');	//9
    $tArray[++$x] = array('1981fy');	//10

    $tArray[++$x] = array('1982q1');	//11
    $tArray[++$x] = array('1982q2');	//12
    $tArray[++$x] = array('1982q3');	//13
    $tArray[++$x] = array('1982q4');	//14
    $tArray[++$x] = array('1982fy');	//15

    $tArray[++$x] = array('1983q1');	//16
    $tArray[++$x] = array('1983q2');	//17
    $tArray[++$x] = array('1983q3');	//18
    $tArray[++$x] = array('1983q4');	//19
    $tArray[++$x] = array('1983fy');	//20

    $tArray[++$x] = array('1984q1');	//21
    $tArray[++$x] = array('1984q2');	//22
    $tArray[++$x] = array('1984q3');	//23
    $tArray[++$x] = array('1984q4');	//24
    $tArray[++$x] = array('1984fy');	//25

    $tArray[++$x] = array('1985q1');	//26
    $tArray[++$x] = array('1985q2');	//27
    $tArray[++$x] = array('1985q3');	//28
    $tArray[++$x] = array('1985q4');	//29
    $tArray[++$x] = array('1985fy');	//30

    $tArray[++$x] = array('1986q1');	//31
    $tArray[++$x] = array('1986q2');	//32
    $tArray[++$x] = array('1986q3');	//33
    $tArray[++$x] = array('1986q4');	//34
    $tArray[++$x] = array('1986fy');	//35

    $tArray[++$x] = array('1987q1');	//36
    $tArray[++$x] = array('1987q2');	//37
    $tArray[++$x] = array('1987q3');	//38
    $tArray[++$x] = array('1987q4');	//39
    $tArray[++$x] = array('1987fy');	//40

    $tArray[++$x] = array('1988q1');	//41
    $tArray[++$x] = array('1988q2');	//42
    $tArray[++$x] = array('1988q3');	//43
    $tArray[++$x] = array('1988q4');	//44
    $tArray[++$x] = array('1988fy');	//45

    $tArray[++$x] = array('1989q1');	//46
    $tArray[++$x] = array('1989q2');	//47
    $tArray[++$x] = array('1989q3');	//48
    $tArray[++$x] = array('1989q4');	//49
    $tArray[++$x] = array('1989fy');	//50

    $tArray[++$x] = array('1990q1');	//51
    $tArray[++$x] = array('1990q2');	//52
    $tArray[++$x] = array('1990q3');	//53
    $tArray[++$x] = array('1990q4');	//54
    $tArray[++$x] = array('1990fy');	//55

    $tArray[++$x] = array('1991q1');	//56
    $tArray[++$x] = array('1991q2');	//57
    $tArray[++$x] = array('1991q3');	//58
    $tArray[++$x] = array('1991q4');	//59
    $tArray[++$x] = array('1991fy');	//60

    $tArray[++$x] = array('1992q1');	//61
    $tArray[++$x] = array('1992q2');	//62
    $tArray[++$x] = array('1992q3');	//63
    $tArray[++$x] = array('1992q4');	//64
    $tArray[++$x] = array('1992fy');	//65

    $tArray[++$x] = array('1993q1');	//66
    $tArray[++$x] = array('1993q2');	//67
    $tArray[++$x] = array('1993q3');	//68
    $tArray[++$x] = array('1993q4');	//69
    $tArray[++$x] = array('1993fy');	//70

    $tArray[++$x] = array('1994q1');	//71
    $tArray[++$x] = array('1994q2');	//72
    $tArray[++$x] = array('1994q3');	//73
    $tArray[++$x] = array('1994q4');	//74
    $tArray[++$x] = array('1994fy');	//75

    $tArray[++$x] = array('1995q1');	//76
    $tArray[++$x] = array('1995q2');	//77
    $tArray[++$x] = array('1995q3');	//78
    $tArray[++$x] = array('1995q4');	//79
    $tArray[++$x] = array('1995fy');	//80

    $tArray[++$x] = array('1996q1');	//81
    $tArray[++$x] = array('1996q2');	//82
    $tArray[++$x] = array('1996q3');	//83
    $tArray[++$x] = array('1996q4');	//84
    $tArray[++$x] = array('1996fy');	//85

    $tArray[++$x] = array('1997q1');	//86
    $tArray[++$x] = array('1997q2');	//87
    $tArray[++$x] = array('1997q3');	//88
    $tArray[++$x] = array('1997q4');	//89
    $tArray[++$x] = array('1997fy');	//90

    $tArray[++$x] = array('1998q1');	//91
    $tArray[++$x] = array('1998q2');	//92
    $tArray[++$x] = array('1998q3');	//93
    $tArray[++$x] = array('1998q4');	//94
    $tArray[++$x] = array('1998fy');	//95

    $tArray[++$x] = array('1999q1');	//96
    $tArray[++$x] = array('1999q2');	//97
    $tArray[++$x] = array('1999q3');	//98
    $tArray[++$x] = array('1999q4');	//99
    $tArray[++$x] = array('1999fy');	//100

    $tArray[++$x] = array('2000q1');	//101
    $tArray[++$x] = array('2000q2');	//102	
    $tArray[++$x] = array('2000q3');	//103
    $tArray[++$x] = array('2000q4');	//104
    $tArray[++$x] = array('2000fy');	//105

    $tArray[++$x] = array('2001q1');	//106
    $tArray[++$x] = array('2001q2');	//107
    $tArray[++$x] = array('2001q3');	//108
    $tArray[++$x] = array('2001q4');	//109
    $tArray[++$x] = array('2001fy');	//110

    $tArray[++$x] = array('2002q1');	//111
    $tArray[++$x] = array('2002q2');	//112
    $tArray[++$x] = array('2002q3');	//113
    $tArray[++$x] = array('2002q4');	//114
    $tArray[++$x] = array('2002fy');	//115

    $tArray[++$x] = array('2003q1');	//116
    $tArray[++$x] = array('2003q2');	//117
    $tArray[++$x] = array('2003q3');	//118
    $tArray[++$x] = array('2003q4');	//119
    $tArray[++$x] = array('2003fy');	//120

    $tArray[++$x] = array('2004q1');	//121
    $tArray[++$x] = array('2004q2');	//122
    $tArray[++$x] = array('2004q3');	//123
    $tArray[++$x] = array('2004q4');	//124
    $tArray[++$x] = array('2004fy');	//125

    $tArray[++$x] = array('2005q1');	//126
    $tArray[++$x] = array('2005q2');	//127
    $tArray[++$x] = array('2005q3');	//128
    $tArray[++$x] = array('2005q4');	//129
    $tArray[++$x] = array('2005fy');	//130

    $tArray[++$x] = array('2006q1');	//131
    $tArray[++$x] = array('2006q2');	//132
    $tArray[++$x] = array('2006q3');	//133
    $tArray[++$x] = array('2006q4');	//134
    $tArray[++$x] = array('2006fy');	//135

    $tArray[++$x] = array('2007q1');	//136
    $tArray[++$x] = array('2007q2');	//137
    $tArray[++$x] = array('2007q3');	//138
    $tArray[++$x] = array('2007q4');	//139
    $tArray[++$x] = array('2007fy');	//140	

    $tArray[++$x] = array('2008q1');	//131
    $tArray[++$x] = array('2008q2');	//142
    $tArray[++$x] = array('2008q3');	//143
    $tArray[++$x] = array('2008q4');	//144
    $tArray[++$x] = array('2008fy');	//145

    $tArray[++$x] = array('2009q1');	//146
    $tArray[++$x] = array('2009q2');	//147
    $tArray[++$x] = array('2009q3');	//148
    $tArray[++$x] = array('2009q4');	//149
    $tArray[++$x] = array('2009fy');	//150

    $tArray[++$x] = array('2010q1');	//151
    $tArray[++$x] = array('2010q2');	//152	
    $tArray[++$x] = array('2010q3');	//153
    $tArray[++$x] = array('2010q4');	//154
    $tArray[++$x] = array('2010fy');	//155

    $tArray[++$x] = array('2011q1');	//156
    $tArray[++$x] = array('2011q2');	//157
    $tArray[++$x] = array('2011q3');	//158
    $tArray[++$x] = array('2011q4');	//159
    $tArray[++$x] = array('2011fy');	//160

    $tArray[++$x] = array('2012q1');	//161
    $tArray[++$x] = array('2012q2');	//162
    $tArray[++$x] = array('2012q3');	//163
    $tArray[++$x] = array('2012q4');	//164
    $tArray[++$x] = array('2012fy');	//165

    $tArray[++$x] = array('2013q1');	//166
    $tArray[++$x] = array('2013q2');	//167
    $tArray[++$x] = array('2013q3');	//168
    $tArray[++$x] = array('2013q4');	//169
    $tArray[++$x] = array('2013fy');	//170

    $tArray[++$x] = array('2014q1');	//171
    $tArray[++$x] = array('2014q2');	//172
    $tArray[++$x] = array('2014q3');	//173
    $tArray[++$x] = array('2014q4');	//174
    $tArray[++$x] = array('2014fy');	//175

    $tArray[++$x] = array('2015q1');	//176
    $tArray[++$x] = array('2015q2');	//177
    $tArray[++$x] = array('2015q3');	//178
    $tArray[++$x] = array('2015q4');	//179
    $tArray[++$x] = array('2015fy');	//180

    $tArray[++$x] = array('2016q1');	//181
    $tArray[++$x] = array('2016q2');	//182
    $tArray[++$x] = array('2016q3');	//183
    $tArray[++$x] = array('2016q4');	//184
    $tArray[++$x] = array('2016fy');	//185

    $tArray[++$x] = array('2017q1');	//186
    $tArray[++$x] = array('2017q2');	//187
    $tArray[++$x] = array('2017q3');	//188
    $tArray[++$x] = array('2017q4');	//189
    $tArray[++$x] = array('2017fy');	//190

    $tArray[++$x] = array('2018q1');	//191
    $tArray[++$x] = array('2018q2');	//192
    $tArray[++$x] = array('2018q3');	//193
    $tArray[++$x] = array('2018q4');	//194
    $tArray[++$x] = array('2018fy');	//195

    $tArray[++$x] = array('2019q1');	//196
    $tArray[++$x] = array('2019q2');	//197
    $tArray[++$x] = array('2019q3');	//198
    $tArray[++$x] = array('2019q4');	//199
    $tArray[++$x] = array('2019fy');	//200

    $tArray[++$x] = array('2020q1');	//201
    $tArray[++$x] = array('2020q2');	//202
    $tArray[++$x] = array('2020q3');	//203
    $tArray[++$x] = array('2020q4');	//204
    $tArray[++$x] = array('2020fy');	//205

    $tArray[++$x] = array('2021q1');	//206
    $tArray[++$x] = array('2021q2');	//207
    $tArray[++$x] = array('2021q3');	//208
    $tArray[++$x] = array('2021q4');	//209
    $tArray[++$x] = array('2021fy');	//210

    $tArray[++$x] = array('2022q1');	//211
    $tArray[++$x] = array('2022q2');	//212
    $tArray[++$x] = array('2022q3');	//213
    $tArray[++$x] = array('2022q4');	//214
    $tArray[++$x] = array('2022fy');	//225

    $tArray[++$x] = array('2023q1');	//216
    $tArray[++$x] = array('2023q2');	//217
    $tArray[++$x] = array('2023q3');	//218
    $tArray[++$x] = array('2023q4');	//219
    $tArray[++$x] = array('2023fy');	//220

    $tArray[++$x] = array('2024q1');	//221
    $tArray[++$x] = array('2024q2');	//222
    $tArray[++$x] = array('2024q3');	//223
    $tArray[++$x] = array('2024q4');	//224
    $tArray[++$x] = array('2024fy');	//225

    $tArray[++$x] = array('2025q1');	//226
    $tArray[++$x] = array('2025q2');	//227
    $tArray[++$x] = array('2025q3');	//228
    $tArray[++$x] = array('2025q4');	//229
    $tArray[++$x] = array('2025fy');	//230

    $tArray[++$x] = array('2026q1');	//231
    $tArray[++$x] = array('2026q2');	//232
    $tArray[++$x] = array('2026q3');	//233
    $tArray[++$x] = array('2026q4');	//234
    $tArray[++$x] = array('2026fy');	//235

    $tArray[++$x] = array('2027q1');	//236
    $tArray[++$x] = array('2027q2');	//237
    $tArray[++$x] = array('2027q3');	//238
    $tArray[++$x] = array('2027q4');	//239
    $tArray[++$x] = array('2027fy');	//240

    $tArray[++$x] = array('2028q1');	//241
    $tArray[++$x] = array('2028q2');	//242
    $tArray[++$x] = array('2028q3');	//243
    $tArray[++$x] = array('2028q4');	//244
    $tArray[++$x] = array('2028fy');	//245

    $tArray[++$x] = array('2029q1');	//246
    $tArray[++$x] = array('2029q2');	//247
    $tArray[++$x] = array('2029q3');	//248
    $tArray[++$x] = array('2029q4');	//249
    $tArray[++$x] = array('2029fy');	//250

    $tArray[++$x] = array('2030q1');	//251
    $tArray[++$x] = array('2030q2');	//252
    $tArray[++$x] = array('2030q3');	//253
    $tArray[++$x] = array('2030q4');	//254
    $tArray[++$x] = array('2030fy');	//255

    $tArray[++$x] = array('2031q1');	//256
    $tArray[++$x] = array('2031q2');	//257
    $tArray[++$x] = array('2031q3');	//258
    $tArray[++$x] = array('2031q4');	//259
    $tArray[++$x] = array('2031fy');	//260

    $tArray[++$x] = array('2032q1');	//261
    $tArray[++$x] = array('2032q2');	//262
    $tArray[++$x] = array('2032q3');	//263
    $tArray[++$x] = array('2032q4');	//264
    $tArray[++$x] = array('2032fy');	//265

    $tArray[++$x] = array('2033q1');	//266
    $tArray[++$x] = array('2033q2');	//267
    $tArray[++$x] = array('2033q3');	//268
    $tArray[++$x] = array('2033q4');	//269
    $tArray[++$x] = array('2033fy');	//270

    $tArray[++$x] = array('2034q1');	//271
    $tArray[++$x] = array('2034q2');	//272
    $tArray[++$x] = array('2034q3');	//273
    $tArray[++$x] = array('2034q4');	//274
    $tArray[++$x] = array('2034fy');	//275

    $tArray[++$x] = array('2035q1');	//276
    $tArray[++$x] = array('2035q2');	//277
    $tArray[++$x] = array('2035q3');	//278
    $tArray[++$x] = array('2035q4');	//279
    $tArray[++$x] = array('2035fy');	//280

    $tArray[++$x] = array('2036q1');	//281
    $tArray[++$x] = array('2036q2');	//282
    $tArray[++$x] = array('2036q3');	//283
    $tArray[++$x] = array('2036q4');	//284
    $tArray[++$x] = array('2036fy');	//285

    $tArray[++$x] = array('2037q1');	//286
    $tArray[++$x] = array('2037q2');	//287
    $tArray[++$x] = array('2037q3');	//288
    $tArray[++$x] = array('2037q4');	//289
    $tArray[++$x] = array('2037fy');	//290

    $tArray[++$x] = array('2038q1');	//291
    $tArray[++$x] = array('2038q2');	//292
    $tArray[++$x] = array('2038q3');	//293
    $tArray[++$x] = array('2038q4');	//294
    $tArray[++$x] = array('2038fy');	//295

    $tArray[++$x] = array('2039q1');	//296
    $tArray[++$x] = array('2039q2');	//297
    $tArray[++$x] = array('2039q3');	//298
    $tArray[++$x] = array('2039q4');	//299
    $tArray[++$x] = array('2039fy');	//300
} //end if

?>
