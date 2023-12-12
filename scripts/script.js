
// Автоподстановка темы
const isDarkTheme = localStorage.getItem('isDarkTheme')
const switcher = document.querySelector('.header__themeSwitcher')
if (isDarkTheme === 'true') {
    switcher.classList.remove('left')
    document.body.classList.add('dark-theme')
}
else {
    switcher.classList.add('left')
    document.body.classList.remove('dark-theme')
}

const switchTheme = (switcher) => {
    switcher.classList.toggle('left')
    document.body.classList.toggle('dark-theme')
    const currentDark = switcher.classList.contains('left') ? false : true
    localStorage.setItem('isDarkTheme', currentDark)
}


// О себе
const openPopup = async () => {
    const response = await fetch('/ajax/about-popup')
    let popup = await response.text()
    const parse = new DOMParser().parseFromString(popup, 'text/html')
    popup = parse.querySelector('.popup')
    document.getElementById('wrapper').append(popup)
}
const closePopup = () => {
    document.querySelector('.popup').classList.add('hide')
    setTimeout(function(){
        document.querySelector('.popup').remove()
    }, 400)
}

document.querySelectorAll('.form__section-radio').forEach(function (radio) {
    const radioDepends = {
        email: document.querySelector('.input__email'),
        phone: document.querySelector('.input__phone'),
        another: document.querySelector('.input__link'),
        met: document.querySelector('.input__date'),
    }

    radio.addEventListener('click', function (e) {
        const value = this.value

        Object.keys(radioDepends).forEach(function (dependKey) {
            const depend = radioDepends[dependKey]
            depend?.classList.add('hidden')
            depend?.classList.remove('validate')
        })

        radioDepends[value]?.classList.remove('hidden')
        radioDepends[value]?.classList.add('validate')

    })
})

const formSectionSelect = document.querySelector('.form__section-select')
if (formSectionSelect) {
    formSectionSelect.addEventListener('change', function () {
        const value = this.value
        const education = document.querySelector('.form__educationSection')
        if (value == "education") {
            education.classList.remove('hidden')
        } else {
            education.classList.add('hidden')
        }
    })
}



const form = document.querySelector('form')
if (form) {
    const raiseValidateError = (msg, input) => {
        input.classList.add('error')
        input.classList.remove('success')
        console.log(msg)
    }
    const lettersRegexp = /^[a-zа-яё]+$/i
    const emailRegex = /^([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)$/
    const phoneRegex = /^\+7\d{10}$/
    form.addEventListener('submit', function (e) {
        e.preventDefault()
        let canSubmit = true
        const toValidate = document.querySelectorAll('.validate')
        toValidate.forEach(function (item) {
            item.classList.add('success')
            const value = item.value
            if (item.classList.contains('required')) {
                if (value === "") {
                    raiseValidateError("Заполните поле", item)
                    canSubmit = false
                }
            }
            if (item.classList.contains('lettersRegexp')) {
                if (!lettersRegexp.test(value)) {
                    raiseValidateError("Поле должно содержать только буквы", item)
                    canSubmit = false
                }
            }
            if (item.classList.contains('emailRegexp')) {
                if (!emailRegex.test(value)) {
                    raiseValidateError("Поле должно соответствовать формату Email", item)
                    canSubmit = false
                }
            }
            if (item.classList.contains('phoneRegexp')) {
                if (!phoneRegex.test(value)) {
                    raiseValidateError("Поле должно соответствовать формату номера телефона +7", item)
                    canSubmit = false
                }
            }
        })
        if(canSubmit){
            form.submit()
        }
    })

    const clearBtn = document.querySelector('.form__btns-clear')

    clearBtn.addEventListener('click', function () {
        const inputs = form.querySelectorAll('input, textarea')
        inputs.forEach(input => input.value = "")
    })

}


const slideBtns = document.querySelectorAll('.interesting__slider-btn')
if (slideBtns) {
    const slides = document.querySelector('.interesting__slider-slides')
    const slidesCount = document.querySelectorAll('.interesting__slider-slide').length
    let activeSlide = 0

    const slide = () => {
        const offset = -activeSlide * 100
        slides.style.transform = `translateX(${offset}%)`
    }

    slideBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {

            if (btn.classList.contains('interesting__slider-next')) {
                activeSlide++
                if (activeSlide >= slidesCount) {
                    activeSlide = 0
                }
            } else {
                activeSlide--
                if (activeSlide < 0) {
                    activeSlide = slidesCount - 1
                }
            }

            slide()
        })
    })
    //
    const newTodo = document.querySelector('.todo__btn-add')
    const clearTodo = document.querySelector('.todo__btn-clear')

    function removeTodo(id) {
        const json = localStorage.getItem('todo')
        if (!json) return
        const array = JSON.parse(json).filter(function (item) {
            return item.id !== id
        })
        localStorage.setItem('todo', JSON.stringify(array))
        renderTodoItems()
    }

    function renderTodoItems() {
        const json = localStorage.getItem('todo')
        if (!json) {
            document.querySelector('.todo__list-items').innerHTML = ''
            return false
        }
        const array = JSON.parse(json)
        let toPaste = ''
        array.forEach(function (todoItem) {
            const id = todoItem.id
            const text = todoItem.text
            toPaste +=
                `<div class="todo__list-item">
                <p class="todo__list-item-text">${text}</p>
                <button onclick="removeTodo(${id})" class="todo__btn todo__btn-remove-item">Удалить</button>
            </div>`
        })
        document.querySelector('.todo__list-items').innerHTML = toPaste
    }

    newTodo.addEventListener('click', function () {
        let array = []
        if (localStorage.getItem('todo')) {
            const ls = localStorage.getItem('todo')
            array = JSON.parse(ls)
        }
        let id = array.length

        const textInput = document.querySelector('.todo__input')
        const text = textInput.value
        document.querySelector('.todo__input').value = ''

        array = [...array, { id, text }]
        localStorage.setItem('todo', JSON.stringify(array))
        renderTodoItems()
    })

    clearTodo.addEventListener('click', function () {
        localStorage.removeItem('todo')
        renderTodoItems()
    })

    renderTodoItems()
    //

    let currentMinutesTmp = localStorage.getItem('currentMinutesTmp') ? Number(localStorage.getItem('currentMinutesTmp')) : 0
    let currentMinutes = currentMinutesTmp
    let timerStartTime = currentMinutes * 60 * 1000 // в мсек
    let currentSeconds = 0

    const delayBtns = document.querySelectorAll('.timer__btn-delay')
    const startTimerBtn = document.querySelector('.timer__btn-start')
    const stopTimerBtn = document.querySelector('.timer__btn-stop')
    const restartTimerBtn = document.querySelector('.timer__btn-restart')


    delayBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            timerStartTime = Number(btn.getAttribute('data-time')) * 60 * 1000
            currentMinutes = Number(btn.getAttribute('data-time'))
            currentMinutesTmp = currentMinutes
            currentSeconds = 0
            localStorage.setItem('currentMinutesTmp', currentMinutesTmp)
            setTime(currentMinutes, currentSeconds)
        })
    })

    setTime(currentMinutes, currentSeconds)

    function setTime(min, sec) {
        document.querySelector('.timer__counter-minutes').textContent = min < 10 ? `0${min}` : min
        document.querySelector('.timer__counter-seconds').textContent = sec < 10 ? `0${sec}` : sec
    }

    let timerInterval = null
    let timerTimeout = null

    function runTimer() {
        if (currentMinutes > 0 || currentSeconds > 0) {
            currentSeconds--
            if (currentSeconds < 0) {
                currentSeconds = 59
                currentMinutes--
            }
            timerStartTime -= 1000
        }
        setTime(currentMinutes, currentSeconds)
    }

    function startTimer(){
        timerInterval = setInterval(runTimer, 1000)
        timerTimeout = setTimeout(function () {
            clearInterval(timerInterval)
        }, timerStartTime)
        startTimerBtn.disabled = true
        stopTimerBtn.disabled = false
    }

    function stopTimer(){
        clearInterval(timerInterval)
        clearTimeout(timerTimeout)
        startTimerBtn.disabled = false
        stopTimerBtn.disabled = true
    }

    function restartTimer(){
        stopTimer()
        currentMinutes = currentMinutesTmp
        currentSeconds = 0
        timerStartTime = currentMinutes * 60 * 1000
        startTimer()
    }

    startTimerBtn.addEventListener('click', startTimer)
    stopTimerBtn.addEventListener('click', stopTimer)
    restartTimerBtn.addEventListener('click', restartTimer)

}
