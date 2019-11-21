Algoritmo menor_3
	// Introduzco dos números y me devuelve el mayor
	num1 <- 0
	num2 <- 0
	num3 <- 0
	min <- 0
	Escribir 'escribe el primer numero'
	Leer num1
	Escribir 'escribe el segundo numero'
	Leer num2
	Escribir 'escribe el tercer numero'
	Leer num3
	Si num1>num2 Entonces
		Si num3>num1 Entonces
			min <- num2
		SiNo
			Si num3>num2 Entonces
				min <- num2
			SiNo
				min <- num3
			FinSi
		FinSi
	SiNo
		Si num1>num3 Entonces
			min <- num3
		SiNo
			min <- num1
		FinSi
	FinSi
	Escribir "El numero menor es" min
FinAlgoritmo

