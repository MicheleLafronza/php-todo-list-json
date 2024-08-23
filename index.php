<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app-container">
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
                <li>
                    <span class="task">Esempio di attività</span>
                    <button class="delete-btn">✕</button>
                </li>
            </ul>
        </main>
        <footer>
            <p>Realizzato da Michele</p>
        </footer>
    </div>
</body>
</html>
