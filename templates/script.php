<script>
    const containerImg = document.getElementById("img-container")

    let scrollAmount = 0
    let leftScroll = 200
    const scrollInterval = setInterval(() => {
        containerImg.scrollBy({ left: leftScroll, behavior: "smooth" })
        scrollAmount += leftScroll
        if (scrollAmount > (1000 + containerImg.scrollWidth - containerImg.clientWidth)) {
            containerImg.scrollTo({ left: 0, behavior: "smooth"})
            scrollAmount = 0
        }
    },1000)

</script>