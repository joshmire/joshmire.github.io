const quitButton = document.getElementById('quitButton')

quitButton.addEventListener('click', quitGame)

function gameOn(){
    document.getElementById('game').style.display = 'grid'
    document.getElementById('content').style.display = 'none'
}

function quitGame(){
    startGame()
    document.getElementById('game').style.display = 'none'
    document.getElementById('content').style.display = 'table'
}