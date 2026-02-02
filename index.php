<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Феймовые ребята | Интернет-культура</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #fff;
            min-height: 100vh;
            padding-bottom: 40px;
        }
        
        header {
            background: rgba(0, 0, 0, 0.7);
            padding: 25px 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            margin-bottom: 40px;
            backdrop-filter: blur(10px);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            background: linear-gradient(90deg, #ff8a00, #e52e71);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .subtitle {
            font-size: 1.2rem;
            color: #aaa;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .characters-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .character-card {
            background: rgba(30, 30, 46, 0.8);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .character-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            border-color: rgba(255, 255, 255, 0.2);
        }
        
        .character-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-bottom: 3px solid;
        }
        
        .character-content {
            padding: 20px;
        }
        
        .character-name {
            font-size: 1.8rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .character-role {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .character-description {
            color: #ccc;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .character-quote {
            font-style: italic;
            color: #aaa;
            border-left: 3px solid;
            padding-left: 12px;
            margin-top: 15px;
        }
        
        .fandom-level {
            display: flex;
            align-items: center;
            margin-top: 15px;
            gap: 5px;
        }
        
        .fandom-label {
            font-size: 0.9rem;
            color: #aaa;
        }
        
        .fandom-stars {
            color: #ffd700;
        }
        
        .footer {
            text-align: center;
            margin-top: 50px;
            color: #888;
            font-size: 0.9rem;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        @media (max-width: 768px) {
            .characters-grid {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-users"></i> Феймовые ребята</h1>
            <p class="subtitle">Знаковые персонажи интернет-культуры, которые стали настоящими символами своего времени. От мемов до философских дискуссий — эти ребята оставили след в цифровой истории.</p>
        </div>
    </header>
    
    <div class="container">
        <div class="characters-grid">
            <!-- Персонаж 1 -->
            <div class="character-card">
                <img src="https://i.imgur.com/2JhL8W5.jpeg" alt="Стив из Майнкрафта" class="character-img" style="border-color: #5ba32b;">
                <div class="character-content">
                    <h2 class="character-name"><i class="fas fa-cube"></i> Стив</h2>
                    <div class="character-role" style="background-color: #3a7d34; color: white;">Minecraft</div>
                    <p class="character-description">Главный персонаж самой популярной песочницы в мире. Стив стал символом креативности и выживания в открытом мире. Его молчаливость и квадратность превратились в мемы, а способность нести тонны блоков — в предмет шуток.</p>
                    <p class="character-quote" style="border-color: #5ba32b;">"Молчание — золото, особенно когда ты можешь построить из этого золота целый дворец"</p>
                    <div class="fandom-level">
                        <span class="fandom-label">Уровень феймовости:</span>
                        <div class="fandom-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Персонаж 2 -->
            <div class="character-card">
                <img src="https://i.imgur.com/VWJvB5E.jpeg" alt="Шрек" class="character-img" style="border-color: #7bb356;">
                <div class="character-content">
                    <h2 class="character-name"><i class="fas fa-dragon"></i> Шрек</h2>
                    <div class="character-role" style="background-color: #7bb356; color: white;">Кино-мем</div>
                    <p class="character-description">Огр, который стал королём интернет-мемов. История Шрека о принятии себя и поиске любви превратилась в неиссякаемый источник для мемов, фан-арта и философских дискуссий о многослойности его характера.</p>
                    <p class="character-quote" style="border-color: #7bb356;">"Лучше быть настоящим огром, чем поддельным принцем"</p>
                    <div class="fandom-level">
                        <span class="fandom-label">Уровень феймовости:</span>
                        <div class="fandom-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Персонаж 3 -->
            <div class="character-card">
                <img src="https://i.imgur.com/4k0Z1cO.jpeg" alt="Рик из Рик и Морти" class="character-img" style="border-color: #42b4e6;">
                <div class="character-content">
                    <h2 class="character-name"><i class="fas fa-atom"></i> Рик Санчез</h2>
                    <div class="character-role" style="background-color: #1a6b8c; color: white;">Научпоп-циник</div>
                    <p class="character-description">Гениальный учёный с циничным взглядом на мультивселенную. Рик стал символом интеллектуального сарказма и экзистенциального кризиса. Его фразы вроде "Wubba lubba dub dub!" и "Нет ничего священного" разобрали на цитаты.</p>
                    <p class="character-quote" style="border-color: #42b4e6;">"Чтобы быть умным, нужно много учиться. Чтобы быть гением, нужно понять, что всё бессмысленно"</p>
                    <div class="fandom-level">
                        <span class="fandom-label">Уровень феймовости:</span>
                        <div class="fandom-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Персонаж 4 -->
            <div class="character-card">
                <img src="https://i.imgur.com/FqJzW3k.jpeg" alt="Гомер Симпсон" class="character-img" style="border-color: #ffd90f;">
                <div class="character-content">
                    <h2 class="character-name"><i class="fas fa-donut"></i> Гомер Симпсон</h2>
                    <div class="character-role" style="background-color: #ffd90f; color: #333;">Вечный отец</div>
                    <p class="character-description">Глава семьи Симпсонов, чья лень, любовь к пончикам и нестандартные методы воспитания стали легендарными. Гомер представляет собой собирательный образ "среднего американца" со всеми его недостатками и достоинствами.</p>
                    <p class="character-quote" style="border-color: #ffd90f;">"МММ... пончики... — это решение всех проблем, кроме диабета"</p>
                    <div class="fandom-level">
                        <span class="fandom-label">Уровень феймовости:</span>
                        <div class="fandom-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Персонаж 5 -->
            <div class="character-card">
                <img src="https://i.imgur.com/TGs46pV.jpeg" alt="Джонни Сильверхенд" class="character-img" style="border-color: #ff0055;">
                <div class="character-content">
                    <h2 class="character-name"><i class="fas fa-guitar"></i> Джонни Сильверхенд</h2>
                    <div class="character-role" style="background-color: #ff0055; color: white;">Киберпанк-легенда</div>
                    <p class="character-description">Рокербой из Найт-Сити, чья трагическая история стала символом борьбы против корпораций в мире будущего. Его образ олицетворяет бунт, стойкость и желание остаться собой в мире, где всё продаётся.</p>
                    <p class="character-quote" style="border-color: #ff0055;">"Иногда чтобы изменить город, нужно сжечь его дотла"</p>
                    <div class="fandom-level">
                        <span class="fandom-label">Уровень феймовости:</span>
                        <div class="fandom-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Персонаж 6 -->
            <div class="character-card">
                <img src="https://i.imgur.com/u6m6tEd.jpeg" alt="Крипер из Майнкрафта" class="character-img" style="border-color: #4a752c;">
                <div class="character-content">
                    <h2 class="character-name"><i class="fas fa-bomb"></i> Крипер</h2>
                    <div class="character-role" style="background-color: #4a752c; color: white;">Тихий подрывник</div>
                    <p class="character-description">Самый узнаваемый моб Minecraft, известный своей способностью тихо подкрадываться и взрываться. Несмотря на разрушительную природу, Крипер стал символом игры и объектом бесчисленных мемов и фанатского творчества.</p>
                    <p class="character-quote" style="border-color: #4a752c;">"Тссс... бум!"</p>
                    <div class="fandom-level">
                        <span class="fandom-label">Уровень феймовости:</span>
                        <div class="fandom-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>© 2026 Сайт о феймовых ребятах | Все персонажи принадлежат их правообладателям | Создано с ❤️ для фанатов интернет-культуры. @theykama Все права защищены.</p>
            <p style="margin-top: 10px;"><i class="fas fa-hashtag"></i>феймовыеребята #интернеткультура #мемы #персонажи</p>
        </div>
    </div>
    
    <script>
        // Добавляем анимацию при прокрутке
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.character-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
            
            // Добавляем случайное мерцание звездам
            const stars = document.querySelectorAll('.fandom-stars i');
            setInterval(() => {
                const randomStar = stars[Math.floor(Math.random() * stars.length)];
                randomStar.style.transform = 'scale(1.3)';
                randomStar.style.transition = 'transform 0.3s ease';
                
                setTimeout(() => {
                    randomStar.style.transform = 'scale(1)';
                }, 300);
            }, 1000);
        });
    </script>
</body>
</html>