// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question:
            "¿Cómo se pronuncian las letras (F , G , H , C) del alfabeto en portugués?",
        answer: "Efi, Yê, Agá, Cê",
        options: [
            "Essi, Eji, A, E",
            "Pê, Yê, Efi, Zê",
            "Cê, Agá, Yê, Efi",
            "Efi, Yê, Agá, Cê",
        ],
    },
    {
        numb: 2,
        question: "En español es 'Dinero', su traducción al portugués es...",
        answer: "Dinheiro",
        options: ["Dinneiro", "Dinheiro", "Plata", "Dinehiro"],
    },
    {
        numb: 3,
        question:
            "Selecciona las letras faltantes para completar la palabra F___bol (Fútbol)",
        answer: "ute",
        options: ["ute", "arot", "iuc", "ucc"],
    },
    {
        numb: 4,
        question:
            "¿Cómo se pronuncian los números (1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 y 10) en portugués?",
        answer: "Um, dois, três, quatro, cinco, seis, sete, oito, nove, dez",
        options: [
            "Um,  três, dois, cinco, quatro, seis, sete, oito, nove, dez",
            "One, two, three, four, five, six, seven, eight, nine, ten",
            "Um, dois, três, quatro, cinco, seis, sete, oito, nove, dez",
            "Un, dêux, trois, quatre, cinq, six, sêpt, huit, neuf, dix",
        ],
    },
    {
        numb: 5,
        question: "¿Qué significa la palabra “Ontem” en español?",
        answer: "Ayer",
        options: ["Hoy", "Mañana", "Anteayer", "Ayer"],
    },
    {
        numb: 6,
        question: "Según su traducción al portugués, 'manzana' sería...",
        answer: "Maçã",
        options: ["Maçã", "Apple", "Pommê", "Jabêka"],
    },
    {
        numb: 7,
        question:
            "¿Qué sonido fonético tiene la E cuando está al final de una palabra y no tiene acento en portugués?",
        answer: "Tiene el sonido de la I",
        options: [
            "Tiene el sonido de la A",
            "Tiene el sonido de la Ñ",
            "Tiene el sonido de la U",
            "Tiene el sonido de la I",
        ],
    },
    {
        numb: 8,
        question:
            "Selecciona las letras faltantes para completar la palabra J__o (Juego)",
        answer: "og",
        options: ["ang", "og", "iri", "arg"],
    },
    {
        numb: 9,
        question: "¿Qué es “Eu”, “Ele”, “Você” y “Nós” en español?",
        answer: "Son pronombres personales; “Yo”, “Él”, “Tú/Usted” y “Nosotros”",
        options: [
            "Son pronombres personales; “Yo”, “Él”, “Tú/Usted” y “Nosotros”",
            "Son conectores; “Con”, “El”, “La” y “Como”",
            "Son auxiliares para hacer preguntas; “Por qué”, “Qué”, “Para qué” y “Cómo”",
            "Son pronombres personales; “Yo”, “Elle”, “Tú/Usted” y “Nosotres”",
        ],
    },
    {
        numb: 10,
        question:
            "¿Cómo se pronuncian las letras (J , L , M , N) del alfabeto en portugués?",
        answer: "Yota, Eli, Emi, Eni",
        options: [
            "Jey, El, Em, En",
            "A, B, C, D",
            "Shi, Chi, Ni, Mi",
            "Yota, Eli, Emi, Eni",
        ],
    },
    {
        numb: 11,
        question: "Según su traducción al portugués, 'Sandalias' sería...",
        answer: "Chinelos",
        options: ["Sandals", "Chanclas", "Botaun", "Chinelos"],
    },
    {
        numb: 12,
        question: "¿Cuáles son los colores primarios en portugués?",
        answer: "Azul, Vermelho, Amarelo",
        options: [
            "Amarelo, Rosa, Vermelho",
            "Branco, Azul, Vermelho",
            "Azul, Vermelho, Amarelo",
            "Branco, Azul, Marrom",
        ],
    },
    {
        numb: 13,
        question:
            "Las partes de la cabeza traducidas al portugués son:",
        answer: "Cabeça, cabelo, testa, olho, orelha, nariz, boca, pescoço",
        options: [
            "Les chêveux, Le front, Les yeux, Les oreiles, Le nez, Les levres",
            "Hêad, hair, forehead, eyes, ear, face, nose, mouth, nêck",
            "Cabeça, cabelo, testa, olho, orelha, nariz, boca, pescoço",
            "Cabeça, cabelo, die stirn, das auge, die nase, der mund, pescoço",
        ],
    },
    {
        numb: 14,
        question:
            "¿Qué significan las palabras “Saia”, “Calças”, “Casaco” y “Gravata” en español?",
        answer: "Falda, Pantalón, Chaqueta, Corbata",
        options: [
            "Meias, Pantalón, Chaqueta, Corbata",
            "Falda, Pantalón, Chaqueta, Corbata",
            "Camisa, Pan, Pantalon, Nueve",
            "Skirt, Pants, Jacket, Corbata",
        ],
    },
    {
        numb: 15,
        question: "¿Cómo son los días de la semana en portugués?",
        answer: "Segunda-feira, Terça-feira, Quarta-feira, Quinta-feira, Sexta-feira, Sábado, Domingo",
        options: [
            "Montag, Diênstag, Mittwoch, Donnerstag, Frêitag, Samstag, Sonntag",
            "Gêtsuyoubi, Kayoubi, Suiyoubi, Mokuyoubi, Kin'youbi, doyoubi, nichiyoubi",
            "Lundi, Mardi, Mercrêdi, Jeudi, Vendrêdi, Samedi, Dimanchê",
            "Segunda-feira, Terça-feira, Quarta-feira, Quinta-feira, Sexta-feira, Sábado, Domingo",
        ],
    },
    {
        numb: 16,
        question: "¿Cómo son los meses del año en portugués?",
        answer: "Janeiro, Fevereiro, Março, Abril, Maio, Junho, Julho, Agosto, Setembro, Outubro, Novembro, Dezembro",
        options: [
            "Januar, Februar, Marz, April, Mai, Juni, Juli, August, September, Oktober, November, December",
            "Janeiro, Fevereiro, Março, Abril, Maio, Junho, Julho, Agosto, Setembro, Outubro, Novembro, Dezembro",
            "Januarino, Februar, Marzie, Aprile, Maiie, Junie, Juli, Augustin, September, Oktober, November, December",
            "January, February, March, April, May, June, July, August, September, October, November, December",
        ],
    },
    {
        numb: 17,
        question:
            "¿Cuál es la traducción de las palabras “Hombre”, “Mujer”, “Hermano”, “Padre” y “Madre” en portugués?",
        answer: "Homem, Mulher, Irmão, Pai e Mãe",
        options: [
            "Mãn, Woman, Brother, Father and Mother",
            "Homem, Mulher, Irmão, Pai e Mãe",
            "Vir, Feminãe, Frater, Pater et Mãter",
            "Mãnn, Kvinner, Bror, Far og Mor",
        ],
    },
    {
        numb: 18,
        question:
            "Selecciona las letras faltantes para completar la palabra Co___ro (Sepulturero)",
        answer: "vei",
        options: ["vei", "rai", "sou", "coi"],
    },
    {
        numb: 19,
        question: "¿Cómo se traduce la palabra “Obrero” al portugués?",
        answer: "Pedreiro",
        options: ["Operarius", "Arbeider", "Pedreiro", "Pedreirio"],
    },
    {
        numb: 20,
        question:
            "¿Qué sonido fonético tiene la O cuando se encuentra al final de una palabra y no tiene acentos en portugués?",
        answer: "Tiene el sonido de la U",
        options: [
            "Tiene el sonido de la Y",
            "Tiene el sonido de la U",
            "Tiene el sonido de la SH",
            "Tiene el sonido de la O",
        ],
    },
    {
        numb: 21,
        question:
            "¿Qué sonido fonético tiene la LH cuando se encuentra en las palabras en portugués?",
        answer: "Tiene el sonido de la Li",
        options: [
            "Tiene el sonido de la K",
            "Tiene el sonido de la Q",
            "Tiene el sonido de la H",
            "Tiene el sonido de la Li",
        ],
    },
    {
        numb: 22,
        question:
            "¿Qué sonido fonético tiene la NH cuando se encuentra en las palabras en portugués?",
        answer: "Tiene el sonido de la Ñ",
        options: [
            "Tiene el sonido de la Ñ",
            "Tiene el sonido de la X",
            "Tiene el sonido de la B",
            "Tiene el sonido de la W",
        ],
    },
    {
        numb: 23,
        question:
            "¿Qué sonido fonético tiene la CH cuando se encuentra en las palabras en portugués?",
        answer: "Tiene el sonido de la SH",
        options: [
            "Tiene el sonido de la MN",
            "Tiene el sonido de la E",
            "Tiene el sonido de la V",
            "Tiene el sonido de la SH",
        ],
    },
    {
        numb: 24,
        question:
            "¿Qué sonido fonético tiene la NH cuando se encuentra en las palabras en portugués?",
        answer: "Tiene el sonido de la Ñ",
        options: [
            "Tiene el sonido de la Ñ",
            "Tiene el sonido de la X",
            "Tiene el sonido de la B",
            "Tiene el sonido de la W",
        ],
    },
    {
        numb: 25,
        question: "¿Qué sonido fonético tiene la Ç (Cedilla) en portugués?",
        answer: "Tiene el sonido de la S",
        options: [
            "Tiene el sonido de la GH",
            "Tiene el sonido de la S",
            "Tiene el sonido de la TP",
            "Tiene el sonido de la MT",
        ],
    },
];
