


    (function() { 
    // Fonction de désactivation des spans
    function desactivateTooltips() {
    var spans = document.getElementsByTagName('span'),
    spansLength = spans.length;
    for (var i = 0 ; i < spansLength ; i++) {
    if (spans[i].className == 'tooltip') {
    spans[i].style.display = 'none';
    }
    }
    }
    // La fonction ci-dessous permet de récupérer les  span
    function getTooltip(element) {
    while (element = element.nextSibling) {
    if (element.className === 'tooltip') {
    return element;
    }
    }
    return false;
    }
    // Fonctions de vérification du formulaire, elles renvoient «true » si tout est OK
    var check = {}; // objet littéral
    check['sex'] = function() {
    var sex = document.getElementsByName('sex'),
    tooltipStyle = getTooltip(sex[1].parentNode).style;
    if (sex[0].checked || sex[1].checked) {
    tooltipStyle.display = 'none';
    return true;
    } else {
    tooltipStyle.display = 'inline-block';
    return false;
    }
    };
    check['lastName'] = function(id) {
    var name = document.getElementById(id),
    tooltipStyle = getTooltip(name).style;
    if (name.value.length >= 2) {
        name.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
    } else {
    name.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
    }
    };
    check['firstName'] = check['lastName']; // La fonction pour lerénom est la même que celle du nom
    check['age'] = function() {
    var age = document.getElementById('age'),
    tooltipStyle = getTooltip(age).style,
    ageValue = parseInt(age.value);
    if (!isNaN(ageValue) && age.value.length==10) {
    age.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
    } else {
    age.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
    }
    };
    check['login'] = function() {
    var login = document.getElementById('login'),
    tooltipStyle = getTooltip(login).style;
    if (login.value.length >= 4) {
    login.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
    } else {
    login.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
    }
    };
    
    // Mise en place des événements
    (function() { // Utilisation d'une fonction anonyme pour éviterles variables globales.
    var myForm = document.getElementById('myForm'),
    inputs = document.getElementsByTagName('input'),
    inputsLength = inputs.length;
    for (var i = 0 ; i < inputsLength ; i++) {
    if (inputs[i].type == 'text') {
    inputs[i].onkeyup = function() {
    check[this.id](this.id); // 
    };
    }
    }
    
    myForm.onreset = function() {
        for (var i = 0 ; i < inputsLength ; i++) {
            if (inputs[i].type == 'text' ) {
            inputs[i].className = '';
            }
            }
            desactivateTooltips();
            };
            })();
            // Maintenant que tout est initialisé, on peut désactiver les «tooltips »
            desactivateTooltips();
            })();

        