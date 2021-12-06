USE [imagenes]
GO

/****** Object:  Table [dbo].[textura]    Script Date: 6/12/2021 03:24:31 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[textura](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[t1r] [int] NULL,
	[t1g] [int] NULL,
	[t1b] [int] NULL,
	[t2r] [int] NULL,
	[t2g] [int] NULL,
	[t2b] [int] NULL,
	[t3r] [int] NULL,
	[t3g] [int] NULL,
	[t3b] [int] NULL
) ON [PRIMARY]

GO