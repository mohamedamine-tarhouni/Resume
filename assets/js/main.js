/*** Add target Link ***/

const scrollTopLink = document.getElementById( 'scroll-top-link' );
const cvNavbar = document.querySelector( '.cv__navbar' );
const burgerMain = cvNavbar.querySelector( 'input[type=checkbox]' );
const cvLink = document.querySelectorAll(".cv__navbar-list-link");
const cvContentSection = document.querySelectorAll(".cv__content section");
cvLink.forEach((el, index) => {
    el.addEventListener("click", (event) => {
		burgerMain.checked = false;
		cvNavbar.classList.remove("open");
        let dataHref = el.getAttribute("data-href");
        [].forEach.call(cvLink, (el) => {
            el.classList.remove("active");
        });
        el.classList.add("active");
        event.preventDefault();
        document.getElementById(dataHref).scrollIntoView();
    })
});
changeLinkState = () => {
    let index = cvContentSection.length;

    while(--index && window.scrollY + 50 < cvContentSection[index].offsetTop) {}

    cvLink.forEach((link) => link.classList.remove('active'));
    cvLink[index].classList.add('active');
		burgerMain.checked = false;
	cvNavbar.classList.remove("open");
	if(window.scrollY > 0){
		scrollTopLink.setAttribute("data-visible", true);
	}
	else{
		scrollTopLink.setAttribute("data-visible", false);
	}
}
window.addEventListener('scroll', changeLinkState);
/*** Validation Form ***/
const onFocus = ( ev ) => {
    ev.target.parentNode.classList.add( 'inputs--filled' );
}
const onBlur = ( ev ) => {
    if ( ev.target.value.trim() === '' ) {
        ev.target.parentNode.classList.remove( 'inputs--filled' );
    } else if ( ev.target.checkValidity() == false ) {
        ev.target.parentNode.classList.add( 'inputs--invalid' );
        ev.target.addEventListener( 'input', liveValidation );
    } else if ( ev.target.checkValidity() == true ) {
        ev.target.parentNode.classList.remove( 'inputs--invalid' );
        ev.target.addEventListener( 'input', liveValidation );
    }
}

const inputs = document.querySelectorAll( 'input[type=text], input[type=email], textarea' );
for (i = 0; i < inputs.length; i ++) {
    let inputEl = inputs[i];
    if( inputEl.value.trim() !== '' ) {
        inputEl.parentNode.classList.add( 'input--filled' );
    }
    inputEl.addEventListener( 'focus', onFocus );
    inputEl.addEventListener( 'blur', onBlur );
}
const liveValidation = ( ev ) => {
    (!ev.target.checkValidity()) ? ev.target.parentNode.classList.add( 'inputs--invalid' ) : ev.target.parentNode.classList.remove( 'inputs--invalid' );
}

const onSubmit = ( ev ) => {
    console.log("Submited");
    const inputsWrappers = ev.target.parentNode.querySelectorAll( 'span.cv__form-content' );
    console.log("inputsWrappers ===> ", inputsWrappers);
    for (let i = 0; i < inputsWrappers.length; i ++) {
        let input = inputsWrappers[i].querySelector( 'input[type=text], input[type=email], textarea' );
        console.log("input ===> ", input);
        console.log("input.checkValidity() ===> ", input.checkValidity());
        (!input.checkValidity()) ? inputsWrappers[i].classList.add( 'inputs--invalid' ) : inputsWrappers[i].classList.remove( 'inputs--invalid' );
    }
}

const submitBtn = document.querySelector( 'input[type=submit]' );
submitBtn.addEventListener( 'click', onSubmit );
burgerMain.addEventListener( 'click', (e) => {
	console.log("cvNavbar ===> ", cvNavbar);
	if(burgerMain.checked){
		cvNavbar.classList.add("open");
	}
	else{
		cvNavbar.classList.remove("open");
	}
});
scrollTopLink.addEventListener( 'click', (e) => {
	window.scroll({
		top: 0, 
		left: 0, 
		behavior: 'smooth'
	});
		scrollTopLink.setAttribute("data-visible", false);
});
