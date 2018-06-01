;(function() {
  $(window).scroll(()=> {
    const inBottom = isInBottom()

    if (inBottom) {
      //View navigation
      darkNavigation()
    } else {
      //Hide navigation
      unDarkNavigation()
    }
  })

  function darkNavigation(){
    $("#mainNav").addClass("navbar-dark")
    $("#mainNav").addClass("bg-dark")
    $("#mainNav").slideDown("fast")
  }

  function unDarkNavigation(){
    $("#mainNav").removeClass("navbar-dark")
    $("#mainNav").removeClass("bg-dark")
    $("#mainNav").slideDown("fast")
  }

  function isInBottom() {
    const $heightWindow = 300;
    //const $description = $("#description")
    //const descriptionHeight = $description.height()

    return $(window).scrollTop() > $(window).height() - ($heightWindow * 2)
  }
})()
