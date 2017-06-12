<div class="navbar">
    <div class="logo">
        HobiWeb
    </div>
    <ul class="menu">
        <li>
            <a href="./">
                Acasă
            </a>
		</li>
		<?php 
			if (getUser()) {
				echo '      								 
					<li>     
						<a href="./medicatii.php">
							Medicații
						</a>
					</li>
					<li>
						<a href="./recomandari.php">
							Recomandări
						</a>
					</li>
					<li>
						<a href="./exercitii.php">
							Exerciții
						</a>
					</li>
					<li>
						<a href="./deautentificare.php">
							Deautentificare
						</a>
					</li>
				';
			} else {
				echo '                                        
					<li>
						<a href="./despre.php">
							Despre
						</a>
					</li>
					<li>
						<a href="./test.php">
							Test
						</a>
					</li>
					<li>
						<a href="./statistici.php">
							Statistici
						</a>
					</li>
					<li>
						<a href="./inregistrare.php">
							Înregistrare
						</a>
					</li>
					<li>
						<a href="./autentificare.php">
							Autentificare
						</a>
					</li>
				';
			}
		?>
        </li>
    </ul>
</div>