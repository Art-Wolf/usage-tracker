import java.awt.Image;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;

import javax.activation.MimetypesFileTypeMap;
import javax.imageio.ImageIO;


public class Crop {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		File folder = new File("/Users/johndoyle/Downloads/");
		File[] listOfFiles = folder.listFiles();
		
		for (int i = 0; i < listOfFiles.length; i++) {
			if (listOfFiles[i].isFile()) {
				if ( listOfFiles[i].getName().substring(listOfFiles[i].getName().length() - 3).equals("png")) {
					
					File file = listOfFiles[i];
					File croppedFile = new File("/Users/johndoyle/Downloads/mrq-" + String.format("%04d", i) + ".png");
					
					
					try {
						croppedFile.delete();
						Image original = ImageIO.read(file);
						int x = 10, y = 20, w = 40, h = 50;
						BufferedImage croppedImage = new BufferedImage(w, h, BufferedImage.TYPE_INT_ARGB);
						croppedImage.getGraphics().drawImage(original, 0, 0, w, h, x, y, x+w,y+h, null);
						
						ImageIO.write(croppedImage, "png", croppedFile);
						
					} catch (IOException e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}				}
			}
		}

		

	}

}

