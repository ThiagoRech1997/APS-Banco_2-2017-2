Create Table Tb_Bairro(
	Bai_Codigo integer Not Null Primary Key,
    Bai_Descricao varchar(30) Not Null
);

Create Table Tb_Cidade(
	Cid_Codigo integer Not Null Primary Key,
    Cid_Descricao varchar(30) Not Null
);

Create Table Tb_Endereco(
	End_Codigo integer Not Null Primary Key,
    End_Descricao varchar(30) Not Null
);

Create Table Tb_Cargo(
	Car_Codigo integer Not Null Primary Key,
    Car_Descricao varchar(25) Not Null,
    Car_Salariobase integer Not Null
);

Create Table Tb_Funcionario(
	Fun_Codigo integer Not Null Primary Key,
    Fun_Nome varchar(30) Not Null,
    Fun_Rg  varchar(14) Not Null,
    Fun_Cpf varchar(14) Not Null,
	Fun_Codcargo integer Not Null References Tb_Cargo(Car_Codigo),
    Fun_Codendereco integer Not Null References Tb_Endereco(End_Codigo),
    Fun_Codbairro   integer Not Null References Tb_Bairro(Bai_Codigo),
    Fun_Codcidade   integer Not Null References Tb_Cidade(Cid_Codigo)
);

Create Table Tb_Editora(
	Edi_Codigo integer Not Null Primary Key,
    Edi_Nome varchar(23) Not Null,
    Edi_Codendereco integer Not Null References Tb_Endereco(End_Codigo),
    Edi_Codcidade   integer Not Null References Tb_Cidade(Cid_Codigo), 
    Edi_Codbairro   integer Not Null References Tb_Bairro(Bai_Codigo),
    Edi_Fone varchar(12) Not Null,
    Edi_Contato varchar(10) 
);

Create Table Tb_Cliente(
	Cli_Codigo integer Not Null Primary Key, 
    Cli_Nome varchar(30) Not Null,
    Cli_Rg   varchar(14) Not Null,
    Cli_Codendereco integer Not Null References Tb_Endereco(End_Codigo),
    Cli_Numero varchar(5),
    Cli_Codbairro integer Not Null References Tb_Bairro(Bai_Codigo),
    Cli_Codcidade integer Not Null References Tb_Cidade(Cid_Codigo),
    Cli_Fone  varchar(12) Not Null,
    Cli_Prazodevol integer Not Null, 
    Cli_Cpf  varchar(14)
);

Create Table Tb_Categoria(
	Cat_Codigo integer Not Null Primary Key,
    Cat_Descricao varchar(20)
);

Create Table Tb_Livro(
	Liv_Codigo Integer Not Null Primary Key,
    Liv_Titulo varchar(150) Not Null,
    Liv_Codeditora integer Not Null References Tb_Editora (Edi_Codigo),
    Liv_Codcategoria integer Not Null References Tb_Categoria(Cat_Codigo),
    Liv_Edicao varchar(15) Not Null,
    Liv_Ano    integer Not Null,
    Liv_Prazominimo varchar(15)
);

Create Table Tb_Autor(
	Aut_Codigo integer Not Null Primary Key,
    Aut_Nome varchar(45) Not Null
);

Create Table Tb_Autorlivro(
	Autliv_Codautor integer Not Null References Tb_Autor(Aut_Codigo),
    Autliv_Codlivro integer Not Null References Tb_Livro(Liv_Codigo),
	Autliv_Principal varchar(3) Not Null,
	Primary Key(Autliv_Codautor, Autliv_Codlivro)
);

Create Table Tb_Reserva(
	Res_Codigo integer Not Null Primary Key,
    Res_Data Date Not Null,
    Res_Codlivro integer Not Null References Tb_Livro(Liv_Codigo),
    Res_Codfunc integer Not Null References Tb_Funcionario(Fun_Codigo),
	Res_Codcliente integer Not Null References Tb_Cliente(Cli_Codigo),
    Res_Situacao varchar(10) 
); 

Create Table Tb_Exemplar(
	Exe_Codigo integer Not Null Primary Key, 
    Exe_Codlivro integer Not Null References Tb_Livro(Liv_Codigo),
    Exe_Status varchar(10) Not Null
);

Create Table Tb_Emprestimo(
	Emp_Codigo integer Not Null Primary Key,
    Emp_Data  Date Not Null,
    Emp_Codcliente integer Not Null References Tb_Cliente(Cli_Codigo),
    Emp_Codfuncionario integer Not Null References Tb_Funcionario(Fun_Codigo) 
);

Create Table Tb_Exemplaremprestimo(
	Exepre_Codexemplar	integer	Not Null References Tb_Exemplar(Exe_Codigo),
	Exepre_Codemprestimo	integer	Not Null References Tb_Emprestimo(Emp_Codigo),
	Exepre_Dtprevdev Date Not Null,
	Exepre_Dtdevmul Date,
	Exepre_Dtpgmul Date,
	Exepre_Codreserva integer References Tb_Reserva(Res_Codigo),
    Exepre_Valormulta integer Not Null,
	Primary Key(Exepre_Codexemplar, Exepre_Codemprestimo)
);


