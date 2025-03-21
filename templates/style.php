<style>
    *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    ::selection {
        outline: none;
    }
    ::-webkit-scrollbar {
        display: none;
    }
    body {
        display: flex;
        flex-direction: column;
        place-content: center;
        place-items: center;
        height: 100vh;
        width: 100vw;
        background: #e0e0e0;
        color: darkcyan;
    }
    main {
        display: flex;
        flex-direction: column;
        place-content: center;
        place-items: center;
        gap: 10px;
        height: 90%;
        width: 100%;
        overflow: auto;
    }
    picture {
        display: flex;
        padding: 20px;
        gap: 20px;
        height: 60%;
        width: 100%;
        background: white;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.322);
        overflow: auto;
    }
    img {
        height: 100%;
        border-radius: 10px;
        object-fit: cover;
        object-position: center;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.397);
    }
</style>