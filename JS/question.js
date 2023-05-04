let hatena = document.querySelector(".hatena");
let question = document.querySelector(".question");


hatena.onclick = function (e) {
    e.stopPropagation();
    if (!question.classList.contains('question-popup')) {
        question.classList.add('question-popup');
        catalogue.classList.add('action-2');
        catalogue3.classList.add('action3-2');
    } else {
        question.classList.remove('question-popup');
    }

    navigation.classList.add('navigation-disappear');
    close2.classList.add('close2-popup');
    catalogue.classList.remove('action');
    catalogue3.classList.remove('action3');

    navi1.classList.remove('open1');
    navi2.classList.remove('open2');
    navi3.classList.remove('open3');
    navi4.classList.remove('open4');
    navi5.classList.remove('open5');
    navi6.classList.remove('open6');
    navi7.classList.remove('open7');
    navi8.classList.remove('open8');
    navi9.classList.remove('open9');
    navi10.classList.remove('open10');

    navi11.classList.remove('open11');
    navi12.classList.remove('open12');
    navi13.classList.remove('open13');
    navi14.classList.remove('open14');
    navi15.classList.remove('open15');


    main.classList.remove('slide');

    main.classList.remove('slide2');



}

let close2 = document.querySelector(".close2");

close2.onclick = function () {
    navigation.classList.add('navigation-display')
    navigation.classList.remove('navigation-disappear');
    question.classList.remove('question-popup');
    close2.classList.remove('close2-popup');
    catalogue.classList.remove('action-2');
    catalogue3.classList.remove('action3-2');
}
