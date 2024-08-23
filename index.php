<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- vue cdn -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios cdn -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    

</head>
<body>
    <div id="app" class="app-container">
        <header>
            <h1>To-Do List</h1>
        </header>
        <main>
            <div class="todo-input">
                <input type="text" id="new-task" placeholder="Aggiungi una nuova attività...">
                <button id="add-task-btn">Aggiungi</button>
            </div>
            <ul class="todo-list">
                <!-- Gli elementi della lista andranno qui -->
                 <li v-for="(task, index) in list" :key="index"><span class="task">{{ task }}</span>
                 <button class="delete-btn">✕</button></li>
            </ul>
        </main>
        <footer>
            <p>Realizzato da Michele</p>
        </footer>
    </div>

    <script src="main.js"></script>
</body>
</html>
