from math import *

#__________class___________

class point():
  x = 0
  y = 0
  
  def __init__(self,xn,yn):
    
    self.x = xn
    self.y = yn 

#_____________________

class triangle():
  p1=None
  p2=None
  p3=None

  def __init__(self,p1n,p2n,p3n):
    
    self.p1=p1n
    self.p2=p2n
    self.p3=p3n
    
  def equielateral(self):
    
    if egal_long(self.p1,self.p2,self.p1,self.p3) and egal_long(p1,p2,p2,p3):
    
      return True
    
    else:
      
      return False 

#_______

  def isocelle(self):
    
    if (egal_long(self.p1,self.p2,self.p1,self.p3) or egal_long(self.p1,self.p2,self.p2,self.p3))and self.equielateral()==False:
  
      return True
   
    else:
      
      return False 

#______

  def rectangl(self):
      
    tt = [longeur(self.p1,self.p2),longeur(self.p1,self.p3),longeur(self.p2,self.p3)]
    tmax=max(tt)
    tt.remove(max(tt))
    tmin=min(tt)
    tt.remove(min(tt))
    
    if fabs(tmax**2-(tmin**2+tt[0]**2))<0.001:
        
      return True

    else:
        
      return False
      
  def nature(self):
    
    if self.equielateral():
        
      return "equ"
      
    elif self.isocelle():
        
      if self.rectangl():
          
        return "iso rec"
          
      else:
          
        return "iso"
        
    elif self.rectangl():
        
      return "rec"
        
    else:
        
      return "com"
        
#__________fonction_________

def milieu(A,B):
    
  C = point((A.x+B.x)/2,(A.y+B.y)/2)
  
  return C
  
def longeur(A,B):
  
  return sqrt((A.x-B.x)**2+(A.y-B.y)**2) 
    
def egal_long(A,B,C,D):
  
  if longeur(A,B)==longeur(C,D):
    
    return True
    
  else:
    
    return False
