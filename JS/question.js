let hatena = document.querySelector(".hatena");
let question = document.querySelector(".question");

hatena.onclick = function (e) {
  e.stopPropagation();
  if (!question.classList.contains("question-popup")) {
    question.classList.add("question-popup");
    catalogue.classList.add("action-2");
    catalogue3.classList.add("action3-2");
  } else {
    question.classList.remove("question-popup");
  }

  navigation.classList.add("navigation-disappear");
  close2.classList.add("close2-popup");
  catalogue.classList.remove("action");
  catalogue3.classList.remove("action3");
  catalogue4.classList.remove("action4");

  navi1.classList.remove("open1");
  navi2.classList.remove("open2");
  navi3.classList.remove("open3");
  navi4.classList.remove("open4");
  navi5.classList.remove("open5");
  navi6.classList.remove("open6");
  navi7.classList.remove("open7");
  navi8.classList.remove("open8");
  navi9.classList.remove("open9");
  navi10.classList.remove("open10");

  navi11.classList.remove("open11");
  navi12.classList.remove("open12");
  navi13.classList.remove("open13");
  navi14.classList.remove("open14");
  navi15.classList.remove("open15");

  navi16.classList.remove("open16");
  navi17.classList.remove("open17");
  navi18.classList.remove("open18");
  navi19.classList.remove("open19");
  navi20.classList.remove("open20");
  navi21.classList.remove("open21");
  navi22.classList.remove("open22");
  navi23.classList.remove("open23");
  navi24.classList.remove("open24");

  main.classList.remove("slide");
  main.classList.remove("slide2");
  main.classList.remove("slide3");
};

let close2 = document.querySelector(".close2");

close2.onclick = function () {
  navigation.classList.add("navigation-display");
  navigation.classList.remove("navigation-disappear");
  question.classList.remove("question-popup");
  close2.classList.remove("close2-popup");
  catalogue.classList.remove("action-2");
  catalogue3.classList.remove("action3-2");
};
