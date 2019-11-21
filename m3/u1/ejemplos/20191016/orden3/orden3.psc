Algoritmo mayor_3
	// Introduzco dos números y me devuelve el mayor
	num1 <- 0
	num2 <- 0
	num3 <- 0
	max <- 0
	middle <- 0
	min <- 0
	Escribir 'escribe el primer numero'
	Leer num1
	Escribir 'escribe el segundo numero'
	Leer num2
	Escribir 'escribe el tercer numero'
	Leer num3
	Si num1>num2 Entonces
		Si num3>num1 Entonces
			max <- num3
			middle <- num1
			min <- num2
		SiNo
			max <- num1
			Si num3>num2 Entonces
				middle <- num3
				min <- num2
			SiNo
				middle <- num2
				min <- num3
			FinSi
		FinSi
	SiNo
		Si num2>num3 Entonces
			max <- num2
			Si num1>num3 Entonces
				middle <- num1
				min <- num3
			SiNo
				middle <- num3
				min <- num1
			FinSi
		SiNo
			max <- num3
			midle <- num2
			min <- num1
		FinSi
	FinSi
FinAlgoritmo

