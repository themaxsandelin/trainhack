
let player

function onYouTubeIframeAPIReady() {
  player = new YT.Player('video', {
    width: '100%',
    videoId: 'gegR4jIXLZA',
    playerVars: {
      'showinfo': 0,
      'rel': 0
    },
    events: {
      'onStateChange': (e) => {
        if (e.data === YT.PlayerState.PAUSED) {
          container.classList.remove('playing')
        } else if (e.data === YT.PlayerState.PLAYING) {
          container.classList.add('playing')
        }
      }
    }
  })
}

const container = document.querySelector('.video-container')

const playButton = document.getElementById('play-video')
playButton.addEventListener('click', () => {
  player.playVideo()
  container.classList.add('playing')
})

// Append YouTube JavaScript API dynamically.
const ytScript = document.createElement('script')
ytScript.src = 'https://www.youtube.com/iframe_api'
ytScript.defer = true
ytScript.async = true
document.querySelector('footer div:not(.container)').appendChild(ytScript)
