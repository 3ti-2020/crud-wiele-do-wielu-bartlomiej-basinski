const rezerwacja={
    text: document.getElementById("text"),
    btn: document.getElementById("btna"),

    btn1:function(){
        this.text.innerHTML="ZAREZERWOWANO POMYŚLNIE WYCIECZKĘ DO KARPAT";
    },

    init:function(){
        this.btn.addEventListener('click',this.btn1.bind(rezerwacja));
    },
}
rezerwacja.init();

const rezerwacja2={
    text: document.getElementById("text"),
    btn: document.getElementById("btnb"),

    btn1:function(){
        this.text.innerHTML="ZAREZERWOWANO POMYŚLNIE WYCIECZKĘ DO MALBORKA";
    },

    init:function(){
        this.btn.addEventListener('click',this.btn1.bind(rezerwacja2));
    },
}
rezerwacja2.init();

const rezerwacja3={
    text: document.getElementById("text"),
    btn: document.getElementById("btnc"),

    btn1:function(){
        this.text.innerHTML="ZAREZERWOWANO POMYŚLNIE WYCIECZKĘ NAD MORZE";
    },

    init:function(){
        this.btn.addEventListener('click',this.btn1.bind(rezerwacja3));
    },
}
rezerwacja3.init();

const rezerwacja4={
    text: document.getElementById("text"),
    btn: document.getElementById("btnd"),

    btn1:function(){
        this.text.innerHTML="ZAREZERWOWANO POMYŚLNIE WYCIECZKĘ DO WARSZAWY";
    },

    init:function(){
        this.btn.addEventListener('click',this.btn1.bind(rezerwacja4));
    },
}
rezerwacja4.init();