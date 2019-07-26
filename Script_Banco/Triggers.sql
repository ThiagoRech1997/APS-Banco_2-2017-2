# Limita Horario Endereco
DELIMITER $$
create trigger Limita_Horario_Insert_Endereco
before insert on tb_endereco 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Endereco
before update on tb_endereco 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Endereco
before delete on tb_endereco 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Bairro
DELIMITER $$
create trigger Limita_Horario_Insert_Bairro
before insert on tb_bairro 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Bairro
before update on tb_bairro 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Bairro
before delete on tb_bairro 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Cidade
DELIMITER $$
create trigger Limita_Horario_Insert_Cidade
before insert on tb_cidade 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Cidade
before update on tb_cidade 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Cidade
before delete on tb_cidade 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Autor
DELIMITER $$
create trigger Limita_Horario_Insert_Autor
before insert on tb_autor 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Autor
before update on tb_autor 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Autor
before delete on tb_autor 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Cargo
DELIMITER $$
create trigger Limita_Horario_Insert_Cargo
before insert on tb_cargo 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Cargo
before update on tb_cargo 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Cargo
before delete on tb_cargo 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Categoria
DELIMITER $$
create trigger Limita_Horario_Insert_Categoria
before insert on tb_categoria 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Categoria
before update on tb_categoria 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Categoria
before delete on tb_categoria
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Cliente
DELIMITER $$
create trigger Limita_Horario_Insert_Cliente
before insert on tb_cliente 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Cliente
before update on tb_cliente 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Cliente
before delete on tb_cliente
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Editora
DELIMITER $$
create trigger Limita_Horario_Insert_Editora
before insert on tb_editora
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Editora
before update on tb_editora 
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Editora
before delete on tb_editora
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Emprestimo
DELIMITER $$
create trigger Limita_Horario_Insert_Emprestimo
before insert on tb_emprestimo
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Emprestimo
before update on tb_emprestimo
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Emprestimo
before delete on tb_emprestimo
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Exemplar
DELIMITER $$
create trigger Limita_Horario_Insert_Exemplar
before insert on tb_exemplar
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Exemplar
before update on tb_exemplar
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Exemplar
before delete on tb_exemplar
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Funcionario
DELIMITER $$
create trigger Limita_Horario_Insert_Funcionario
before insert on tb_funcionario
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Funcionario
before update on tb_funcionario
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Funcionario
before delete on tb_funcionario
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Livro
DELIMITER $$
create trigger Limita_Horario_Insert_Livro
before insert on tb_livro
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Livro
before update on tb_livro
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Livro
before delete on tb_livro
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;

# Limita Horario Reserva
DELIMITER $$
create trigger Limita_Horario_Insert_Reserva
before insert on tb_reserva
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Update_Reserva
before update on tb_reserva
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
DELIMITER $$
create trigger Limita_Horario_Delete_Reserva
before delete on tb_reserva
for each row 
begin 
	declare msg varchar(120); 
	if (date_format(sysdate(), '%a') in ('SAT', 'SUN')) or(date_format(sysdate(), '%H:%i') not between '08:00' and '18:00') then 
		set msg = concat('Nao foi possivel finalizar a operacao: Fora do Expediente'); 
		signal sqlstate '45000' set message_text = msg; 
	end if; 
end$$
DELIMITER ;
#----------------------------------------------------------------------------------------------------------------------------------

#----------------------------------------------------------------------------------------------------------------------------------
