Algoritmo nota_clase
	// Introduzca nota
	nota <- 0
	Escribir 'introduzca la nota'
	Leer nota
	Si nota < 3 Entonces
		Escribir "Muy deficiente"
	SiNo
		Si nota < 5 Entonces
			Escribir "Suspenso"
		SiNo
			Si nota < 6 Entonces
				Escribir "Suficiente"
			SiNo
				Si nota < 7 Entonces
					Escribir "Bien"
				SiNo
					Si nota < 9 Entonces
						Escribir "Notable"
					SiNo
						Escribir "Sobresaliente"
					FinSi
				FinSi
			FinSi
		FinSi
	FinSi
FinAlgoritmo

