#!/usr/bin/env python
# -*- coding: utf-8 -*-

#
# Creation:    26.05.2013
# Last Update: 07.04.2015
#
# Copyright (c) 2013-2015 by Georg Kainzbauer <http://www.gtkdb.de>
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#

import os
import sys
import time
import pygame

time_stamp_prev=0

os.environ["SDL_FBDEV"] = "/dev/fb1"
os.environ['SDL_VIDEODRIVER']="fbcon"

def displaytext(text,size,line,color,clearscreen):
  if clearscreen:
    screen.fill((255,255,255))

  font = pygame.font.Font(None,size)
  text = font.render(text,0,color)
  rotated = pygame.transform.rotate(text,-90)
  textpos = rotated.get_rect()
  textpos.centery = 80
  if line == 1:
    textpos.centerx = 99
    screen.blit(rotated,textpos)
  elif line == 2:
    textpos.centerx = 61
    screen.blit(rotated,textpos)
  elif line == 3:
    textpos.centerx = 25
    screen.blit(rotated,textpos)

def main():
  global screen

  pygame.init()
  pygame.mouse.set_visible(0)
  size = width,height = 128,160
  screen = pygame.display.set_mode(size)

  while True:
    displaytext(time.strftime("%d.%m.%Y"),40,1,(0,0,0),True)
    displaytext(time.strftime("%H:%M:%S"),40,2,(0,0,0),False)
    displaytext("www.gtkdb.de",20,3,(0,0,0),False)
    pygame.display.flip()
    time.sleep(1)

if __name__ == '__main__':
  main()
