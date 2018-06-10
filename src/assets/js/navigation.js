/**
 * Enable smooth-scroll navigation for desktop menus (header and footer)
 */

const siteUrl = document.location.origin
let currentUrl = siteUrl + window.location.pathname
if (currentUrl.lastIndexOf('/') === (currentUrl.length - 1)) {
  currentUrl = currentUrl.substring(0, currentUrl.lastIndexOf('/'))
}

const menuItems = []

const headerItems = document.querySelectorAll('header ul.menu li a')
for (let i = 0; i < headerItems.length; i++) {
  menuItems.push(headerItems[i])
}

menuItems.push(document.getElementById('learn-more-link'))
menuItems.push(document.getElementById('sign-up-link'))

// const footerItems = document.querySelectorAll('footer ul.footer-menu li a')
// for (let i = 0; i < footerItems.length; i++) {
//   menuItems.push(footerItems[i])
// }

// const mobileItems = document.querySelectorAll('nav ul.main-menu li a')
// for (let i = 0; i < mobileItems.length; i++) {
//   menuItems.push(mobileItems[i])
// }

menuItems.forEach((item, i) => {
  item.addEventListener('click', (e) => {
    const link = item.getAttribute('href')
    const isScrollLink = (link.indexOf('#') > -1)
    if (isScrollLink) {
      const section = link.substr(link.indexOf('#'), link.length)

      let origin = link.replace(section, '')
      if (origin === '/') origin = siteUrl
      if (origin.lastIndexOf('/') === (origin.length - 1)) {
        origin = origin.substr(0, origin.lastIndexOf('/'))
      }

      const samePage = (origin === currentUrl)
      if (samePage) {
        e.preventDefault()

        if (history.pushState) {
          history.pushState(null, null, section)
        } else {
          window.hash = section
        }

        const point = document.getElementById(section.replace('#', '')).getBoundingClientRect().top
        jump(point, {
          duration: 400
        })
      }
    }
  })
})

/**
 * Enable smooth-scroll on load.
 */
if (hash) {
  const point = document.getElementById(hash.replace('#', '')).getBoundingClientRect().top
  jump(point, {
    duration: 400
  })
}
